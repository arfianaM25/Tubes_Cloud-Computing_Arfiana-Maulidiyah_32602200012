<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Proyek</title>
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
            max-width: 1200px;
            margin: 40px auto;
            background: transparent;
            border-radius: 18px;
            padding: 0 20px 40px 20px;
        }
        h2 {
            color: #007bff;
            text-align: center;
            margin-bottom: 28px;
            letter-spacing: 1px;
            font-size: 2.1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        .add-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(90deg, #007bff 70%, #17a2b8 100%);
            color: #fff;
            padding: 12px 26px;
            border-radius: 7px;
            font-weight: 700;
            margin-bottom: 32px;
            transition: background 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 10px rgba(0,123,255,0.10);
            font-size: 1rem;
            border: none;
            cursor: pointer;
            text-decoration: none;
        }
        .add-btn:hover {
            background: linear-gradient(90deg, #0056b3 70%, #138496 100%);
            box-shadow: 0 4px 16px rgba(0,123,255,0.13);
            text-decoration: none;
        }
        .filter-bar {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            margin-bottom: 24px;
            justify-content: space-between;
            align-items: center;
        }
        .filter-bar form {
            display: flex;
            gap: 12px;
            align-items: center;
        }
        .filter-bar input[type="text"], .filter-bar select {
            padding: 8px 12px;
            border-radius: 6px;
            border: 1.5px solid #b6d4fe;
            font-size: 1rem;
            background: #f7fafd;
            transition: border 0.2s;
        }
        .filter-bar input[type="text"]:focus, .filter-bar select:focus {
            border: 1.5px solid #007bff;
            outline: none;
            background: #fff;
        }
        .filter-bar button {
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 8px 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        .filter-bar button:hover {
            background: #0056b3;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 28px;
        }
        .card {
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.07);
            padding: 28px 24px 20px 24px;
            display: flex;
            flex-direction: column;
            position: relative;
            transition: box-shadow 0.2s, transform 0.2s;
        }
        .card:hover {
            box-shadow: 0 6px 32px rgba(0,123,255,0.13);
            transform: translateY(-4px) scale(1.01);
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #007bff;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 700;
            margin-left: 8px;
        }
        .status-selesai {
            background: #28a745;
            color: #fff;
        }
        .status-berjalan {
            background: #17a2b8;
            color: #fff;
        }
        .status-tertunda {
            background: #ffc107;
            color: #212529;
        }
        .card-info {
            display: flex;
            flex-wrap: wrap;
            gap: 14px 24px;
            margin-bottom: 12px;
        }
        .info-item {
            display: flex;
            align-items: center;
            gap: 7px;
            font-size: 15px;
            color: #444;
        }
        .progress-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            min-width: 54px;
            padding: 7px 14px;
            border-radius: 20px;
            background: linear-gradient(90deg, #28a745 60%, #e0eafc 100%);
            color: #fff;
            font-weight: 700;
            font-size: 14px;
            text-align: center;
            box-shadow: 0 1px 4px rgba(40,167,69,0.08);
        }
        .deadline-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 7px 14px;
            border-radius: 20px;
            background: #ffc107;
            color: #212529;
            font-weight: 700;
            font-size: 14px;
            box-shadow: 0 1px 4px rgba(255,193,7,0.08);
        }
        .catatan {
            font-size: 14px;
            color: #555;
            font-style: italic;
            margin-bottom: 16px;
            margin-top: 8px;
        }
        .aksi {
            display: flex;
            gap: 10px;
            margin-top: auto;
        }
        .aksi a {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 15px;
            border-radius: 5px;
            font-size: 15px;
            font-weight: 500;
            color: #fff;
            background: #17a2b8;
            transition: background 0.2s, box-shadow 0.2s;
            box-shadow: 0 1px 4px rgba(23,162,184,0.10);
            border: none;
            text-decoration: none;
        }
        .aksi a.edit {
            background: #17a2b8;
        }
        .aksi a.delete {
            background: #dc3545;
        }
        .aksi a:hover {
            filter: brightness(0.92);
            box-shadow: 0 2px 8px rgba(0,0,0,0.12);
            text-decoration: none;
        }
        @media (max-width: 700px) {
            .container {
                padding: 10px 2px 30px 2px;
            }
            .add-btn {
                font-size: 0.95rem;
                padding: 10px 14px;
            }
            .card {
                padding: 18px 10px 14px 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2><i class="fa-solid fa-list-check"></i> Daftar Proyek</h2>
        <a href="/proyek/create" class="add-btn"><i class="fa-solid fa-plus"></i> Tambah Proyek</a>
        
        <!-- Filter & Search Bar -->
        <div class="filter-bar">
            <form method="get" action="">
                <input type="text" name="q" placeholder="Cari judul/pembimbing..." value="<?= htmlspecialchars($_GET['q'] ?? '') ?>">
                <select name="status">
                    <option value="">Semua Status</option>
                    <option value="berjalan" <?= (($_GET['status'] ?? '') == 'berjalan') ? 'selected' : '' ?>>Berjalan</option>
                    <option value="selesai" <?= (($_GET['status'] ?? '') == 'selesai') ? 'selected' : '' ?>>Selesai</option>
                    <option value="tertunda" <?= (($_GET['status'] ?? '') == 'tertunda') ? 'selected' : '' ?>>Tertunda</option>
                </select>
                <button type="submit"><i class="fa-solid fa-filter"></i> Filter</button>
            </form>
        </div>
        
        <div class="grid">
            <?php
            // --- FILTERING LOGIC (contoh, sesuaikan dengan backend Anda) ---
            $filtered = [];
            foreach ($proyek as $p) {
                $q = strtolower($_GET['q'] ?? '');
                $status = $_GET['status'] ?? '';
                $matchQ = $q === '' || (strpos(strtolower($p['judul']), $q) !== false) || (strpos(strtolower($p['pembimbing']), $q) !== false);
                $matchStatus = $status === '' || (isset($p['status']) && $p['status'] === $status);
                if ($matchQ && $matchStatus) $filtered[] = $p;
            }
            ?>
            <?php foreach ($filtered as $p): ?>
            <div class="card">
                <div class="card-title">
                    <i class="fa-solid fa-book"></i>
                    <?= htmlspecialchars($p['judul']) ?>
                    <?php
                        // Status badge
                        $status = $p['status'] ?? 'berjalan';
                        $statusLabel = [
                            'selesai' => ['Selesai', 'fa-circle-check', 'status-selesai'],
                            'berjalan' => ['Berjalan', 'fa-spinner', 'status-berjalan'],
                            'tertunda' => ['Tertunda', 'fa-circle-pause', 'status-tertunda'],
                        ];
                        $s = $statusLabel[$status] ?? $statusLabel['berjalan'];
                    ?>
                    <span class="status-badge <?= $s[2] ?>"><i class="fa-solid <?= $s[1] ?>"></i> <?= $s[0] ?></span>
                </div>
                <div class="card-info">
                    <div class="info-item">
                        <i class="fa-solid fa-user-tie"></i>
                        <?= htmlspecialchars($p['pembimbing']) ?>
                    </div>
                    <div class="info-item deadline-badge">
                        <i class="fa-solid fa-calendar-day"></i>
                        <?= htmlspecialchars($p['deadline']) ?>
                    </div>
                    <div class="info-item progress-badge">
                        <i class="fa-solid fa-bolt"></i>
                        <?= htmlspecialchars($p['progress']) ?>%
                    </div>
                </div>
                <div class="catatan">
                    <i class="fa-solid fa-note-sticky"></i>
                    <?= htmlspecialchars($p['catatan']) ?>
                </div>
                <div class="aksi">
                    <a href="/proyek/edit/<?= $p['id'] ?>" class="edit"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                    <a href="/proyek/delete/<?= $p['id'] ?>" class="delete" onclick="return confirm('Yakin ingin menghapus proyek ini?')"><i class="fa-solid fa-trash"></i> Hapus</a>
                </div>
            </div>
            <?php endforeach; ?>
            <?php if (empty($filtered)): ?>
                <div style="grid-column: 1/-1; text-align:center; color:#888; padding:40px 0;">
                    <i class="fa-solid fa-magnifying-glass"></i> Tidak ada proyek ditemukan.
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>