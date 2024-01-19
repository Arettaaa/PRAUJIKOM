<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content=""/>
    <title>PPDB SMK WIKRAMA BOGOR </title>
    <link rel="stylesheet" href="css/register.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  </head>
  <body>


    <section class="container">
      <header>Formulir PPDB SMK WIKRAMA BOGOR</header>
      @csrf
      <form action="{{route('register.post')}}" method="POST" class="form">

        <div class="input-box">
          <label>NISN</label>
          <input type="integer" placeholder="Masukkan NISN" name="nisn" id="nisn" required />
        </div>

        <div class="input-box">
          <label>Nama Lengkap</label>
          <input type="text" placeholder="Masukkan Nama Lengkap" name="name" id="name" required />
        </div>

        <div class="input-box">
          <label>Email</label>
          <input type="email" placeholder="Masukkan Email" name="email" required />
          <!-- <input type="hidden" name="role" id="role" value="user"> -->
        </div>

        <div class="gender-box">
        <h3>Jenis Kelamin</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" id="gender" value="Perempuan"/>
              <label for="check-male">Perempuan</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" id="gender" value="Laki-Laki"/>
              <label for="check-female">Laki-laki</label>
            </div>
          </div>
        </div>

        <div class="input-box">
          <label>Asal Sekolah</label>
          <input type="text" placeholder="Masukkan Asal Sekolah" name="school" id="school" required />
        </div>
        <div id="tampil" class="input-box" class="form-control" name="school"></div>


        {{-- <div class="input-box">
          <label>Minat Jurusan</label>
          <br>
              <select name="school" id="school" class="input-box">
                <option hidden>Pilih Jurusan</option>
                <option value="Pengembangan Perangkat Lunak dan Gim">Pengembangan Perangkat Lunak dan Gim</option>
                <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>    
                <option value="Manajemen Perkantoran Lembaga Bisnis">Manajemen Perkantoran Lembaga Bisnis</option>                
                <option value="Pemasaran">Pemasaran</option>  
                <option value="Tekmik Komputer Jaringan">Tekmik Komputer Jaringan</option>   
                <option value="Kuliner">Kuliner</option>   
                <option value="Hotel">Hotel</option>    
              </select>
        </div> --}}

         <div class="input-box">
          <label>Minat Jurusan</label>
          <input type="text" placeholder="Masukkan Minat Jurusan" name="major" id="major" required />
        </div>
    

        @csrf
        <br> 
        {{-- <button type="submit"></button> --}}
        <button type="submit" style="height: 45px; padding: 0 16px; border-radius: 36px; background:#1C4670; color: #FFFF; display: flex;
			  justify-content: center; align-items: center; grid-gap: 10px; font-weight: 500;" >Submit</button>
        <br>      
        <a href="/" class="button" style="height: 45px; padding: 0 16px; border-radius: 36px; background:#1C4670; color: #FFFF; display: flex;
			  justify-content: center; align-items: center; grid-gap: 10px; font-weight: 500;">Kembali</a>
        
      </form>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
     <!-- js untuk select2  -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
  </body>
</html>


 
