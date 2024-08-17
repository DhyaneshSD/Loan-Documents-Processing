from django.shortcuts import render
from django.http import JsonResponse
from django.core.files.storage import FileSystemStorage
import os

# Create a directory for file uploads if it doesn't exist
UPLOAD_FOLDER = 'uploads/'
if not os.path.exists(UPLOAD_FOLDER):
    os.makedirs(UPLOAD_FOLDER)

def index(request):
    return render(request, 'index.html')

def process_loan(request):
    if request.method == 'POST' and 'document' in request.FILES:
        file = request.FILES['document']
        
        if file.name == '':
            return JsonResponse({'status': 'error', 'message': 'No selected file'})

        if file:
            # Save the file
            fs = FileSystemStorage(location=UPLOAD_FOLDER)
            file_path = fs.save(file.name, file)
            
            # Process the file (Placeholder for actual processing logic)
            # For example, you might pass the file to your AI model here
            
            return JsonResponse({'status': 'success', 'message': f'File {file.name} processed successfully'})
    else:
        return JsonResponse({'status': 'error', 'message': 'No file part'})
