@extends('layouts.admintemplate')

@section('title', 'Dashboard')

@section('item')
    <div class="container mt-5">
        <canvas id="dataChart" width="400" height="200"></canvas>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch("{{ route('dashboard.data') }}")
                .then(response => response.json())
                .then(data => {
                    var ctx = document.getElementById('dataChart').getContext('2d');
                    var dataChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Guru', 'Prestasi', 'Kotak Saran'],
                            datasets: [{
                                label: 'Jumlah Data',
                                data: [data.guru, data.prestasi, data.keluh],
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                });
        });
    </script>
@endsection
