<div class="card card-success">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#tabel" role="tab" aria-controls="description" aria-selected="true"><i class="fas fa-exchange-alt"></i> Tabel Master Faktur Pembelian</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#inquery2" role="tab" aria-controls="history" aria-selected="false"><i class="fas fa-briefcase-medical"></i> Penelusuran Berdasarkan Tanggal Faktur</a>
            </li>
        </ul>
    </div>
    <div class="card-body shadow">

        <div class="tab-content mt-3">
            <div class="tab-pane active" id="tabel" role="tabpanel">
                <?php $this->load->view('admin/masterFakturPembelian/tblFaktur'); ?>
            </div>

            <div class="tab-pane" id="inquery2" role="tabpanel" aria-labelledby="history-tab">
                <?php $this->load->view('admin/masterFakturPembelian/inquery'); ?>
            </div>
        </div>
    </div>
</div>