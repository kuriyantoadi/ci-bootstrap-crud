# CodeIgniter-Bootstrap-CRUD

**1. Extrak Framework CI**

**2. Import database ci-crud-tambah.sql**

**3. application/config/autoload.php**
  <br>Awal Baris 92 :
  <br>`$autoload['helper'] = array('');`
  <br>Edit :
  <br>`$autoload['helper'] = array('url','form');`

  <br>Awal Baris 61 :
  <br>`  $autoload['libraries'] = array('');`
  <br>Edit :
  <br>`  $autoload['libraries'] = array('database');`

**4. application/config/database.php ubah baris 78-81**
  <br>`'hostname' => 'localhost',`
  <br>`'username' => 'root',`
  <br>`'password' => '',`
  <br>`'database' => 'db_buku',`

**5. application/config/config.php ubdah baris 26**
  <br>`$config['base_url'] = '';`
  <br>Edit
  <br>Alamat disesuaikan dengan nama project
  <br>`$config['base_url'] = 'http://localhost/belajar-ci/';`

**6. Tambah folder js dan css**

  **7. Tambahkan/Edit beberapa file berikut**
  - application/controllers/C_buku.php -> Menghubungkan View dan Model
  - application/models/M_buku.php -> Menghubukan controller dengan Database
  - application/view/v_edit.php -> File untuk edit Data
  - application/view/v_tampil.php -> File untuk tampil data 

  **8. application/config/routes.php ubah baris 52**
  <br>`$route['default_controller'] = 'C_buku';`

  **9. Buka dengan Link berikut**
  <br>`localhost/ci-bootstrap-crud`

  (catatan ini adalah lanjutan dari repository ci-crud-tambah)
