<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Tests\TestCase; // Ganti TestCase agar sesuai dengan Laravel

class AuthTest extends TestCase
{
    use RefreshDatabase; // Membersihkan database sebelum dan sesudah test

    public function test_create_user(): void
    {
        $userData = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => Hash::make('password1234'), // Gunakan Hash::make()
        ];

        $user = User::create($userData);

        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals('John Doe', $user->name);
        $this->assertEquals('johndoe@example.com', $user->email);
        $this->assertTrue(Hash::check('password1234', $user->password)); // Cek password dengan Hash::check()
    }

    public function test_login_user(): void
    {
        // Buat user menggunakan factory agar lebih rapi
        $user = User::factory()->create([
            'email' => 'johndoe@example.com',
            'password' => Hash::make('password1234'), // Pastikan password di-hash
        ]);

        // Kirim request login ke endpoint Laravel
        $response = $this->post('/login', [
            'email' => 'johndoe@example.com',
            'password' => 'password1234', // Pakai password asli (bukan yang sudah di-hash)
        ]);

        // Pastikan response status 200 (berhasil login)
        $response->assertStatus(302);

        // Pastikan user berhasil diautentikasi
        $this->assertAuthenticatedAs($user);
    }
}
