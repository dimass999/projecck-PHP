<form class="form-horizontal p-5 shadow h-100" style="background-color:#f1f2f6;" method="GET" action="HalamanBMI.php">
                                <div class="text-center">
                                  <h3 class="mb-5 text-primary text-black">ISI BMI</h3>
                                </div>
                                <!------------>
                                  <div class="form-group row">
                                    <label for="namalengkap" class="col-sm-4 col-form-label"><b>Nama</b></label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control" name="nama__lengkap" required>
                                    </div>
                                  </div>
                                  <br>
                    
                                <!------------>
                                  <div class="form-group row">
                                    <label for="namalengkap" class="col-sm-4 col-form-label"><b>Berat Badan</b></label>
                                    <div class="col-sm-6">
                                      <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" class="form-control" name="berat__" required>
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">Kg</div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <br>
                    
                                <!------------>
                                  <div class="form-group row">
                                    <label for="namalengkap" class="col-sm-4 col-form-label"><b>Tinggi Badan</b></label>
                                    <div class="col-sm-6">
                                      <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" class="form-control" name="tinggi__" required>
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">Cm</div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <br>
                    
                                <!------------>
                                <div class="form-group row">
                                    <label for="namalengkap" class="col-sm-4 col-form-label"><b>Umur</b></label>
                                    <div class="col-sm-6">
                                      <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" class="form-control" name="umur__" required>
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">Tahun</div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <br>
                    
                                <!------------>
                                <div class="row">
                                  <legend class="col-form-label col-sm-4 pt-0"><b>Jenis Kelamin</b></legend>
                                  <div class="col-sm-8">
                    
                                    <div class="form-check mr-auto">
                                      <input class="form-check-input" type="radio" id="laki" name="jenis__kelamin" value="Laki-Laki" required>
                                      <label class="form-check-label mr-5" for="laki">
                                        Laki-Laki
                                      </label>
                                      <input class="form-check-input" type="radio" id="perempuan" name="jenis__kelamin" value="Perempuan" required>
                                      <label class="form-check-label" for="perempuan">
                                        Perempuan
                                      </label>
                                    </div>
                                  </div>  <!---col-->
                                </div> <!---row-->
                                <br>
                                <!------------>
                                  <div class="text-center">
                                    <input class="btn btn-primary" type="submit" value="Simpan" name="proses"/>
                                  </div>
                              </form>
                            </div> <!--col--->
                            <div class="col-6">
                              <div class="shadow p-5 h-100" style="background-color:#f1f2f6;">
                                
                                <h3 class="text-success text-center" >HASIL BMI</h3>
                                <h6 class="mb-3 text-info text-center">OUTPUT FORM</h6>
                              <?php
                              class bmiPasien {
                                public $nama,
                                       $berat,
                                       $tinggi,
                                       $umur,
                                       $jenisKelamin;
                                      
                                public function hasilBMI() {
                                  return "<b>Nama : $this->nama   <br><br>
                                          Berat Badan : $this->berat <br><br>                  
                                          Tinggi Badan : $this->tinggi <br><br>
                                          Umur : $this->umur <br><br>
                                          Jenis Kelamin : $this->jenisKelamin</b>"; 
                                }
                                public function statusBMI() {
                    
                                }
                              }
                              if (isset($_GET["nama__lengkap"])) {
                                $bmi = new bmiPasien;
                                $bmi->nama = $_GET["nama__lengkap"];
                                $bmi->berat = $_GET["berat__"];
                                $bmi->tinggi = $_GET["tinggi__"];
                                $bmi->umur = $_GET["umur__"];
                                $bmi->jenisKelamin = $_GET["jenis__kelamin"];
                                echo $bmi->hasilBMI();
                              }
                              ?>
                              </div> <!--box-->
                            </div> <!--col--->
                          </div> <!--row--->
                        
                    
                        
                      </div> <!---container-->
                </main>
                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>