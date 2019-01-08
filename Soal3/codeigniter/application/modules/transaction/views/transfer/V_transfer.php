<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Transfer</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Transfer <small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Berhasil Melakukan Transfer!</strong> Best check yo self, you're not looking too good.
                    <p>
                      <ul>
                        <li>Ini coba</li>
                        <li>Ini juga</li>
                        <li>Ini test</li>
                      </ul>
                    </p>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate  class="form-horizontal form-label-left">
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No. Rekening Pengirim <span class="required " style="color:red">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="rekening_pengirim" id="rekening_pengirim" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. Rekening Penerima <span class="required " style="color:red">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="rekening_penerima" name="rekening_penerima" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Total Transfer (Rp) <span class="required " style="color:red">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="total_transfer" name="total_transfer" class="form-control col-md-7 col-xs-12" type="text" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Pesan Pengirim(Opt)</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="pesan_pengirm" class="form-control col-md-7 col-xs-12" type="text" name="pesan_pengirim">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button  class="btn btn-primary">BATAL</button>
                          <button id="submit_transfer" type="submit" class="btn btn-success">SUBMIT</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- MODAL BUAT CHECK DATABASE -->
            <div class="modal fade bs-example-modal-lg" id="checkauth" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <form  data-parsley-validate id="form_transfer" class="form-horizontal form-label-left">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <center><h4 class="modal-title" id="myModalLabel"><i class="fa fa-lock"></i> AUTHENTIKASI KEMANAN</h4> </center>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <center><p>* Untuk konfirmasi keamanan, sialhkan masukkan kembali nomor PIN dan password anda</p></center>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor PIN <span class="required " style="color:red">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" name="rekening_pengirim" id="rekening_pengirim" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Password <span class="required " style="color:red">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" name="rekening_pengirim" id="rekening_pengirim" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                        
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button id="submit_transfer" type="submit" class="btn btn-success">SUBMIT</button>
                            </div>
                        </form>

                      </div>
                    </div>
                  </div>
            <!-- AKHIR MODAL BUAT CHECK -->



          </div>
        </div>