    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Daily Visiting</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);"><?= strtoupper($menu) ?></a></li>
                        <li class="breadcrumb-item active"><?= strtoupper($submenu) ?></li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->   
   
   <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Striped columns</h4>

                    <button class="btn btn-secondary showAdvance" type="button">Advance searching</button>
                </div><!-- end card header -->

                    <div class="card-body">   
                        <div class="mb-2 formAdvance" style="display: none;">
                            <form action="">
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="brandinput" class="form-label">Brand</label>
                                    </div>
                                    <div class="col-lg-4"> 
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="brandinput">
                                            <!-- Soft Buttons -->
                                            <button type="button" class="btn btn-soft-primary waves-effect waves-light" onclick="loadModalBrand()" type="button">Pilih</button> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="sku" class="form-label">SKU</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="sku">
                                            <button type="button" class="btn btn-soft-primary waves-effect waves-light">Pilih</button> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3"> 
                                        <label for="groupCustomer" class="form-label">Group Customer</label> 
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="groupCustomer">
                                            <button type="button" class="btn btn-soft-primary waves-effect waves-light">Pilih</button> 
                                        </div> 
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="outlet" class="form-label">Outlet</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="outlet">
                                            <button type="button" class="btn btn-soft-primary waves-effect waves-light">Pilih</button>
                                        </div> 
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="codepic" class="form-label">Code PIC</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="codepic">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="pic" class="form-label">PIC</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="pic"  >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="tanggal_kunjungan" class="form-label">Tanggal Kunjungan</label>
                                    </div>
                                    <div class="col-lg-4"> 
                                        <input type="text" class="flatpickr flatpickr-input form-control" id="tanggal_kunjungan">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="" class="form-label">Umur</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <table>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="under30" >
                                                        <label class="form-check-label" for="under30">
                                                            0-30 Hari.
                                                        </label> 
                                                    </div> 
                                                </td>
                                                <td style="padding-left: 5px;">
                                                    <div class="form-check" >
                                                        <input class="form-check-input" type="checkbox" id="31-60" >
                                                        <label class="form-check-label" for="31-60">
                                                            31-60 Hari.
                                                        </label>
                                                    </div> 
                                                </td> 
                                                <td style="padding-left: 5px;">
                                                    <div class="form-check" >
                                                        <input class="form-check-input" type="checkbox" id="61-90" >
                                                        <label class="form-check-label" for="61-90">
                                                            61-90 Hari.
                                                        </label>
                                                    </div> 
                                                </td> 
                                                <td style="padding-left: 5px;">
                                                    <div class="form-check" >
                                                        <input class="form-check-input" type="checkbox" id="lebih90" >
                                                        <label class="form-check-label" for="lebih90">
                                                            >90 Hari.
                                                        </label>
                                                    </div> 
                                                </td> 
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="stock_choose" class="form-label">Stock</label>
                                    </div>
                                    <div class="col-lg-4"> 
                                            <select class="form-control" name="stock_choose" id="stock_choose" style="width: 100%; max-width: 100%;"  >
                                                <option value="">Select</option>
                                                <option value="stock dibawah minimum stock">Stock Dibawah Minimum Stock</option>
                                                <option value="stock kosong">Stock Kosong</option>
                                            </select>   
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-danger">Clear</button>
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </form>
                        </div> 
 
                        <div class="table-responsive table-card">
                            <table class="table align-middle table-hover table-striped-columns mb-0" id="daily-visiting">
                                <thead class="table-light">
                                    <tr>
                                        <th class="col text-center">Code Customer</th>
                                        <th class="col-2 text-center">Outlet</th>
                                        <th class="col-5 text-center" >Alamat</th>
                                        <th class="col text-center">Code Pic</th>
                                        <th class="col text-center">PIC</th>
                                        <th class="col-2 text-center">Tanggal Kunjungan</th> 
                                        <th class="col text-center">Jam Mulai</th>
                                        <th class="col text-center">Jam Berakhir</th>
                                        <th class="col text-center">Detail</th> 
                                        <th class="col text-center">Suggest Order</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <?php foreach($daily_visiting_hdr as $dvd) : ?>
                                    <tr>
                                        <td><?= $dvd->customer_code ?></td>
                                        <td><?= $dvd->customer_name ?></td> 
                                        <td><?= $dvd->address ?></td>
                                        <td><?= $dvd->code_pic ?></td>
                                        <td><?= $dvd->pic_name ?></td>
                                        <td><?= date("d-M-Y", strtotime($dvd->start_date)) ?></td>
                                        <td><?= date("H:i:s", strtotime($dvd->start_date)) ?></td>
                                        <td><?= date("H:i:s", strtotime($dvd->ended_date))?></td> 
                                        <td>
                                            <button type="button" class="btn btn-sm btn-light">Details</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-light">Details</button>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?> -->
                                </tbody>
                            </table> 
                        </div>
                     
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->


<div id="modalBrand">
    <div class="modal fade" id="modal-brand" style="display: block; padding-right: 17px; width:100%" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modal-brandLabel">Detail Brand</h5>
            <button type="button" class="btn-close close-x" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                <table class="table table-striped table-hover" id="tableBrand">
                        <thead>
                            <tr>
                                <th style="text-align: center;">action</th>
                                <th style="text-align: center;">Code Brand</th>
                                <th style="text-align: center;">Brand</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                </table>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Pilih</button>
        </div>
        </div>
    </div>
    </div> 
</div>

<!-- JQUERY -->

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
function loadModalBrand() {  
    $('#modalBrand').load("<?= base_url('dailyModalBrand') ?>", { 
    }, function() { 
        $("#tableBrand").DataTable({
            orderCellsTop: true,
            fixedHeader: true,
            'columnDefs': [
                { 
                    'searchable': false, 
                    'targets': [0] 
                },
            ],
            initComplete: function() {
                var api = this.api();
                
                // Iterate over each column
                api.columns().eq(0).each(function(colIdx) {
                    var cell = $('.filters th').eq($(api.column(colIdx).header()).index());

                    // Check if the column is the one you want to exclude from search
                    if (colIdx !== 0) {
                        // Set the header cell to contain the input element
                        var title = $(cell).text();
                        $(cell).html('<input type="text" placeholder="' + title + '" />');

                        // On every keypress in this input
                        $('input', $('.filters th').eq($(api.column(colIdx).header()).index()))
                            .off('keyup change')
                            .on('keyup change', function (e) {
                                e.stopPropagation();
                                $(this).attr('title', $(this).val());
                                var regexr = '({search})';
                                var cursorPosition = this.selectionStart;

                                // Search the column for that value
                                api
                                    .column(colIdx)
                                    .search((this.value != "") ? regexr.replace('{search}', '(((' + this.value + ')))') : "", this.value != "", this.value == "")
                                    .draw();

                                $(this).focus()[0].setSelectionRange(cursorPosition, cursorPosition);
                            });
                    } else {
                        // Remove the filter input for this column
                        $(cell).html('');
                    }
                });
            }
        });

        $('#modal-brand').modal('show') 
    }) 
}
$(document).ready( function () {  
    ajax();
        // datatable ajax
        function ajax(){
        let table = $('#daily-visiting').DataTable({
                        "language": {                
                            "infoFiltered": "",
                            "loadingRecords": "WAIT...",
                        },
                        "responsive": true,
                        "processing": true,
                        "serverSide": true,
                        "lengthChange": true,
                        "ordering": true,
                        "searching": true,
                        "autoWidth": false,
                        "info": true,  
                        "order": [],
                        "serverSide": true,
                        "ajax": {
                            "url": "http://localhost/vendish/Visiting/daily_visiting",
                            "type": "post"
                        },
            
                        "columnDefs": [
                            {
                                "targets": [9], 
                                "orderable": false
                            },
                            {
                                "targets": [0], 
                                "orderable": false
                            }
                        ],

                        "lengthMenu": [
                            [10, 25, 50, -1],
                            [10, 25, 50, "All"]
                        ], 
                    }); 
        }   

       
        $(".flatpickr").flatpickr(
            {
                mode: "range",
                dateFormat: "d-m-Y",
            }
        );

        $(document).on('click', '.showAdvance', function(){
            var isHidden = $(".formAdvance");

            if(isHidden.css('display') == 'none'){
                isHidden.show()
            }else{
                isHidden.hide()
            }
        });

        $(document).on('click', '.close-x', function(){
         
            var table      =  $("#tableBrand").remove();
            
        });
});
</script>