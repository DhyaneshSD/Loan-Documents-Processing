from pymongo import MongoClient
import os

# MongoDB connection settings
MONGO_URI = 'mongodb://localhost:27017/'
DB_NAME = 'loan_documents'
COLLECTION_NAME = 'documents'

# Create MongoDB client
client = MongoClient(MONGO_URI)
db = client[DB_NAME]
collection = db[COLLECTION_NAME]

def create_collection_if_not_exists():
    if COLLECTION_NAME not in db.list_collection_names():
        db.create_collection(COLLECTION_NAME)
        print(f'Collection {COLLECTION_NAME} created.')

def store_document(file_path, file_name):
    create_collection_if_not_exists()
    with open(file_path, 'rb') as file_data:
        document = {
            'file_name': file_name,
            'file_data': file_data.read()
        }
        collection.insert_one(document)
        print(f'Document {file_name} stored in MongoDB.')
