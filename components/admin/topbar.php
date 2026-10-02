<?php
$pageTitle = $pageTitle ?? 'Dashboard';
$pageSubtitle = $pageSubtitle ?? 'Sistem Informasi Perpustakaan';
?>
<header class="bg-white shadow-sm border-b px-6 py-4 flex justify-between items-center">
    <div>
        <h1 class="text-2xl font-bold text-gray-800"><?= htmlspecialchars($pageTitle); ?></h1>
        <p class="text-sm text-gray-500"><?= htmlspecialchars($pageSubtitle); ?></p>
    </div>
    <div class="flex items-center space-x-4">
        <span class="text-sm text-gray-600">Administrator</span>
    </div>
</header>