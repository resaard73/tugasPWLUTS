 <!-- Start BOX --> 
<div class="box box-default"> 
  <div class="box-header with-border"><h3 class="box-title">
      <span class="ion ion-clipboard"></span> UTS</h3> 
  </div> 
  <div class="box-body"> 
 <!-- Start Panel Filter --> 
  <div class="panel-body collapse in" id="filter"> 
    <form action="https://elearning.unisnu.ac.id/#" class="form-horizontal" id="fCari" method="post" accept-charset="utf-8"> 
      <input type="hidden" name="req" value="cari" /> 
      <div class="row"> 
        <div class="col-sm-6"> 
          <div class="form-group"> 
            <label for="tahunid" class="col-sm-12">Tahun Akademik *</label> 
            <div class="col-sm-12"> 
              <select name="tahunid" class="form-control" id="tahunid"> 
                <option value="" selected="selected"></option> 
                <option value="2019-2">Semester Genap-1 2019/2020</option> 
                <option value="2019-1">Semester Gasal-1 2019/2020</option> 
                <option value="2018-2">Semester Genap-1 2018/2019</option> 
                <option value="2018-1">Semester Gasal-1 2018/2019</option> 
              </select> 
              <span class="help-block"></span> 
            </div> 
          </div> 
        </div> 
        <div class="col-sm-6"> 
          <div class="form-group"> 
            <label for="mkkode" class="col-sm-12">Mata Pelajaran</label> 
            <div class="col-sm-12"> 
              <select name="mkkode" class="form-control" id="mkkode" style="width: 100%"> 
                <option value="" selected="selected"></option> 
              </select> 
              <span class="help-block"></span> 
            </div> 
          </div> 
        </div> 
      </div> 
      <div class="row"> 
        <div class="col-sm-12"> 
          <button type="submit" id="btnSimpanfCari" class="btn btn-default bg-green"> 
            <span class="glyphicon glyphicon-search "></span>&nbsp; 
            <span class="hidden-xs" id="CaptionBtnfCari">Cari</span> 
          </button> 
        </div> 
      </div> 
    </form> 
  </div> 
</div> 
<!-- End Panel Filter --> 
<div class="spacer"></div> 
<p id="sum" class="text-center lead"></p> 
<div id="isi_tabel"></div> 
</div>
 </div>
  <!-- End BOX -->