<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $team = [
            [
                'name' => 'Ahmad Fauzi',
                'position' => 'Founder & CEO',
                'image' => 'team/ahmad.jpg',
                'description' => 'Berpengalaman lebih dari 10 tahun di industri media dan jurnalistik.'
            ],
            [
                'name' => 'Sarah Wijaya',
                'position' => 'Editor in Chief',
                'image' => 'team/sarah.jpg',
                'description' => 'Mantan jurnalis senior dengan pengalaman di berbagai media nasional.'
            ],
            [
                'name' => 'Budi Santoso',
                'position' => 'Head of Technology',
                'image' => 'team/budi.jpg',
                'description' => 'Ahli teknologi dengan fokus pada pengembangan platform digital.'
            ],
            [
                'name' => 'Dewi Putri',
                'position' => 'Content Director',
                'image' => 'team/dewi.jpg',
                'description' => 'Spesialis konten digital dengan latar belakang komunikasi massa.'
            ]
        ];

        $milestones = [
            [
                'year' => '2020',
                'title' => 'Awal Mula',
                'description' => 'Portal Berita didirikan dengan visi menyajikan berita akurat dan terpercaya.'
            ],
            [
                'year' => '2021',
                'title' => 'Pengembangan Platform',
                'description' => 'Meluncurkan platform digital yang lebih modern dan user-friendly.'
            ],
            [
                'year' => '2022',
                'title' => 'Ekspansi Konten',
                'description' => 'Memperluas cakupan berita ke berbagai kategori dan topik.'
            ],
            [
                'year' => '2023',
                'title' => 'Pencapaian Pembaca',
                'description' => 'Mencapai 1 juta pembaca aktif bulanan.'
            ]
        ];

        return view('about', compact('team', 'milestones'));
    }
} 