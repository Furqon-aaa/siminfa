<?php
// Data PHP untuk jadwal kelas berdasarkan hari
$jadwal = [
    'Monday' => [
        [
            'mata_kuliah' => 'Sistem Basis Data',
            'lokasi' => 'offline - 4S.2',
            'waktu' => '12:30 - 15:00'
        ],
        [
            'mata_kuliah' => 'Pemrograman Berbasis Platform',
            'lokasi' => 'offline - 3A.1',
            'waktu' => '15:30 - 18:00'
        ]
    ],
    'Tuesday' => [
        [
            'mata_kuliah' => 'Masalah Sosial dan Etika Profesi Informatika',
            'lokasi' => 'online',
            'waktu' => '08:30 - 11:00'
        ],
        [
            'mata_kuliah' => 'Sistem Informasi',
            'lokasi' => 'offline - 3A.1',
            'waktu' => '12:30 - 15:00'
        ]
    ],
    'Wednesday' => [
        [
            'mata_kuliah' => 'Statistika dan Probabilitas',
            'lokasi' => 'offline - 4S.2',
            'waktu' => '08:30 - 10:00'
        ],
        [
            'mata_kuliah' => 'Aljabar Linear',
            'lokasi' => 'offline - 3A.1',
            'waktu' => '15.30 - 18.00'
        ]
    ],
    'Thursday' => [
        [
            'mata_kuliah' => 'Pemrograman berorientasi objek',
            'lokasi' => 'online',
            'waktu' => '12:30 - 15:00'
        ]
    ],
    'Friday' => [
        [
            'mata_kuliah' => 'Pemrograman Web',
            'lokasi' => 'offline - 3S.4',
            'waktu' => '12:30 - 15:00'
        ]
    ]
];

// Fungsi untuk membuat kalender secara otomatis
function generateCalendar($year, $month) {
    $daysOfWeek = ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'];
    $firstDayOfMonth = date('w', strtotime("$year-$month-01"));
    $daysInMonth = date('t', strtotime("$year-$month-01"));

    echo '<div class="calendar">';

    // Header hari
    foreach ($daysOfWeek as $day) {
        echo '<div class="header">' . $day . '</div>';
    }

    // Kosongkan sebelum hari pertama
    for ($i = 0; $i < $firstDayOfMonth; $i++) {
        echo '<div></div>';
    }

    // Hari-hari dalam bulan
    for ($day = 1; $day <= $daysInMonth; $day++) {
        $date = sprintf('%04d-%02d-%02d', $year, $month, $day);
        $dayOfWeek = date('l', strtotime($date));
        $class = (date('Y-m-d') == $date) ? 'today' : '';
        echo '<div class="' . $class . '" onclick="showSchedule(\'' . $dayOfWeek . '\')">' . $day . '</div>';
    }

    echo '</div>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Schedule</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #1c013f;
            color: white;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .header .actions {
            display: flex;
            gap: 10px;
        }

        .header button {
            background: none;
            border: 1px solid white;
            color: white;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        .header button:hover {
            background: white;
            color: #1c013f;
        }

        .container {
            display: flex;
            gap: 20px;
            padding: 20px;
        }

        .calendar {
            flex: 1;
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
        }

        .calendar div {
            text-align: center;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .calendar .header {
            font-weight: bold;
        }

        .calendar .today {
            background: #623eb7;
        }

        .calendar .has-schedule {
            background: #4a357e;
        }

        .calendar .has-schedule:hover {
            background: #6a4fa9;
        }

        .details {
            flex: 1;
            background: #29204a;
            padding: 20px;
            border-radius: 10px;
        }

        .details h2 {
            margin: 0 0 10px;
            font-size: 18px;
        }

        .details .info {
            font-size: 16px;
        }

        .details .info span {
            display: block;
            margin-bottom: 5px;
        }

        .details .info span i {
            margin-right: 5px;
        }
    </style>
    <script>
        const schedules = <?php echo json_encode($jadwal); ?>;

        function showSchedule(dayOfWeek) {
            const details = document.querySelector('.details .info');
            const schedule = schedules[dayOfWeek];

            if (schedule) {
                let html = `<span><strong>Schedule for ${dayOfWeek}</strong></span>`;
                schedule.forEach(item => {
                    html += `
                        <span><i>&#x1F4DA;</i> ${item.mata_kuliah}</span>
                        <span><i>&#x1F4CD;</i> ${item.lokasi}</span>
                        <span><i>&#x23F0;</i> ${item.waktu}</span>
                        <hr>
                    `;
                });
                details.innerHTML = html;
            } else {
                details.innerHTML = '<span><strong>No schedule available for this day.</strong></span>';
            }
        }
    </script>
</head>
<body>
    <div class="header">
        <h1>SIMINFA</h1>
        <div class="actions">
            <button>Get in Touch</button>
            <button>
                <i>&#x1F514;</i>
            </button>
        </div>
    </div>

    <div class="container">
        <div>
            <?php generateCalendar(date('Y'), date('m')); ?>
        </div>
        <div class="details">
            <h2>Jadwal Kelas</h2>
            <div class="info">
                <span><strong>Select a date to view schedule.</strong></span>
            </div>
        </div>
    </div>
</body>
</html>
