from flask import Flask, render_template, request, jsonify
import os

app = Flask(__name__)
app.config['UPLOAD_FOLDER'] = 'uploads/'  # Directory where files will be stored

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/process-loan', methods=['POST'])
def process_loan():
    if 'document' not in request.files:
        return jsonify({'status': 'error', 'message': 'No file part'})
    
    file = request.files['document']
    
    if file.filename == '':
        return jsonify({'status': 'error', 'message': 'No selected file'})

    if file:
        # Save the file
        file_path = os.path.join(app.config['UPLOAD_FOLDER'], file.filename)
        file.save(file_path)
        
        # Process the file (Placeholder for actual processing logic)
        # For example, you might pass the file to your AI model here
        
        return jsonify({'status': 'success', 'message': f'File {file.filename} processed successfully'})

if __name__ == '__main__':
    if not os.path.exists(app.config['UPLOAD_FOLDER']):
        os.makedirs(app.config['UPLOAD_FOLDER'])  # Create the uploads directory if it doesn't exist
    app.run(debug=True)
    