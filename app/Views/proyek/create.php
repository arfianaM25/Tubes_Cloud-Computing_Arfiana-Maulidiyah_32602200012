<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Proyek</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%);
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 480px;
            margin: 48px auto;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            padding: 36px 32px 28px 32px;
        }
        h2 {
            color: #007bff;
            text-align: center;
            margin-bottom: 28px;
            letter-spacing: 1px;
            font-size: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        .export-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(90deg, #28a745 70%, #17a2b8 100%);
            color: #fff;
            padding: 10px 20px;
            border-radius: 7px;
            font-weight: 700;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            text-decoration: none;
            margin-bottom: 18px;
            margin-right: 8px;
            transition: background 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 10px rgba(40,167,69,0.10);
        }
        .export-btn:hover {
            background: linear-gradient(90deg, #218838 70%, #138496 100%);
            text-decoration: none;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }
        label {
            font-weight: 500;
            color: #007bff;
            margin-bottom: 2px;
            display: flex;
            align-items: center;
            gap: 7px;
        }
        input[type="text"],
        input[type="date"],
        input[type="number"],
        textarea,
        input[type="file"] {
            padding: 10px 12px;
            border: 1.5px solid #b6d4fe;
            border-radius: 6px;
            font-size: 1rem;
            font-family: inherit;
            transition: border 0.2s;
            background: #f7fafd;
        }
        input[type="file"] {
            padding: 8px 6px;
            background: #f7fafd;
        }
        input[type="text"]:focus,
        input[type="date"]:focus,
        input[type="number"]:focus,
        textarea:focus,
        input[type="file"]:focus {
            border: 1.5px solid #007bff;
            outline: none;
            background: #fff;
        }
        textarea {
            min-height: 70px;
            resize: vertical;
        }
        .btn-submit {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(90deg, #007bff 70%, #17a2b8 100%);
            color: #fff;
            padding: 12px 0;
            border-radius: 7px;
            font-weight: 700;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            justify-content: center;
            margin-top: 10px;
            transition: background 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 10px rgba(0,123,255,0.10);
        }
        .btn-submit:hover {
            background: linear-gradient(90deg, #0056b3 70%, #138496 100%);
        }
        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-top: 18px;
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
            font-size: 15px;
            transition: color 0.2s;
        }
        .back-link:hover {
            color: #0056b3;
            text-decoration: underline;
        }
        @media (max-width: 600px) {
            .container {
                padding: 18px 4px 18px 4px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="/proyek/export" class="export-btn"><i class="fa-solid fa-file-excel"></i> Export Excel</a>
        <h2><i class="fa-solid fa-plus"></i> Tambah Proyek</h2>
        <form method="post" action="/proyek/store" enctype="multipart/form-data">
            <div class="form-group">
                <label for="judul"><i class="fa-solid fa-book"></i> Judul</label>
                <input type="text" name="judul" id="judul" required>
            </div>
            <div class="form-group">
                <label for="pembimbing"><i class="fa-solid fa-user-tie"></i> Pembimbing</label>
                <input type="text" name="pembimbing" id="pembimbing" required>
            </div>
            <div class="form-group">
                <label for="deadline"><i class="fa-solid fa-calendar-day"></i> Deadline</label>
                <input type="date" name="deadline" id="deadline" required>
            </div>
            <div class="form-group">
                <label for="progress"><i class="fa-solid fa-bolt"></i> Progress (%)</label>
                <input type="number" name="progress" id="progress" min="0" max="100" required>
            </div>
            <div class="form-group">
                <label for="catatan"><i class="fa-solid fa-note-sticky"></i> Catatan</label>
                <textarea name="catatan" id="catatan"></textarea>
            </div>
            <div class="form-group">
                <label for="file"><i class="fa-solid fa-paperclip"></i> Upload File (opsional)</label>
                <input type="file" name="file" id="file" accept=".pdf,.doc,.docx,.xls,.xlsx,.zip,.rar">
            </div>
            <button type="submit" class="btn-submit"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
        </form>
        <a href="/proyek" class="back-link"><i class="fa-solid fa-arrow-left"></i> Kembali ke daftar</a>
    </div>
</body>
</html>