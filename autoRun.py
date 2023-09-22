import os
import subprocess
import webbrowser

# Path ke direktori proyek Laravel Anda
laravel_project_path = 'C:\\Users\\hi\\OneDrive\\Documents\\Laravel\\AchivonAPP'

# Fungsi untuk menjalankan server pengembangan Laravel
def start_laravel_server():
    command = 'php artisan serve'
    subprocess.Popen(command, shell=True, cwd=laravel_project_path)

# Fungsi untuk membuka URL lokal di browser
def open_browser():
    url = 'http://localhost:8000'  # Ganti dengan URL yang sesuai
    webbrowser.open(url)

def start_xampp():
    xampp_path = 'C:\\xampp'  # Ganti dengan path instalasi XAMPP Anda
    apache_start_command = 'apache_start.bat'
    mysql_start_command = 'mysql_start.bat'
    
    os.chdir(xampp_path)  # Ubah direktori kerja ke path instalasi XAMPP
    subprocess.Popen(apache_start_command, shell=True)
    subprocess.Popen(mysql_start_command, shell=True)

# Memanggil fungsi untuk menjalankan server dan membuka browser
start_xampp()
start_laravel_server()
open_browser()
