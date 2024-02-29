        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Listing Customer Produk</h4>

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

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Listing Customer Produk</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div class="" id="customerList"> 
                            <div class="table-responsive table-card mt-3 mb-1" id="divtable" style="overflow-x: auto;padding: 10px;"> 
                          
                                <?php  $this->view('master/customer/table_customer' )?>
                            </div>
 
                        </div>
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end col -->
 

        </div>
        <!-- end row -->

        <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Listing Customer Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                    </div>
                    <form class="tablelist-form" autocomplete="off">
                        <div class="modal-body">
                            <div class="mb-3" id="modal-id" style="display: none;">
                                <label for="id-field" class="form-label">ID</label>
                                <input type="text" id="id-field" class="form-control" placeholder="ID" readonly />
                            </div>

                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Customer Name</label>
                                <input type="text" id="customername-field" class="form-control" placeholder="Enter Name" required />
                                <div class="invalid-feedback">Please enter a customer name.</div>
                            </div>

                            <div class="mb-3">
                                <label for="email-field" class="form-label">Email</label>
                                <input type="email" id="email-field" class="form-control" placeholder="Enter Email" required />
                                <div class="invalid-feedback">Please enter an email.</div>
                            </div>

                            <div class="mb-3">
                                <label for="phone-field" class="form-label">Phone</label>
                                <input type="text" id="phone-field" class="form-control" placeholder="Enter Phone no." required />
                                <div class="invalid-feedback">Please enter a phone.</div>
                            </div>

                            <div class="mb-3">
                                <label for="date-field" class="form-label">Joining Date</label>
                                <input type="text" id="date-field" class="form-control" placeholder="Select Date" required />
                                <div class="invalid-feedback">Please select a date.</div>
                            </div>

                            <div>
                                <label for="status-field" class="form-label">Status</label>
                                <select class="form-control" data-trigger name="status-field" id="status-field" required>
                                    <option value="">Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Block">Block</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button> 
                                <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
 
      
<!-- JQUERY -->

<script>
    $(document).ready( function () { 
        
        // $.ajax({
        //     url: '<?= base_url('get_all_customer') ?>',
        //     type: 'GET',
        //     data: {
        //         data : 'request get customer'
        //     },
        //     dataType: 'json',
        //     success: function(response) {
        //         if (response.status === true) {
        //             // Tanggapan berhasil diterima dari server
        //             console.log('Data diterima:', response.data);
                    
        //             // Buat DataTable dari data yang diterima
        //             $('#listing_customer_table').DataTable({
        //                 data: response.data,
        //                 columns: [
        //                     { data: null, render: function(data, type, row, meta) {
        //                         // Meta berisi informasi tentang baris saat ini
        //                         return meta.row + 1; // Nomor baris dimulai dari 0, tambahkan 1 untuk dimulai dari 1
        //                     }},
        //                     { data: 'code_customer' },
        //                     { data: 'name_customer' },
        //                     { data: 'address_customer' },
        //                     { data: 'group_name' }, 
        //                     { data: 'count_must_check' },
        //                     { data: 'count_medium' },
        //                     { data: 'count_low' },
        //                     { data: 'count_group' },
        //                     { 
        //                         data: 'code_customer', // Ganti 'id' dengan nama properti yang berisi ID yang ingin Anda gunakan
        //                         render: function(data, type, row) {
        //                             // Tampilkan tombol tindakan di sini
        //                             return '<button id="button_' + data + '" class="btn btn-primary">Action</button>';
        //                         }
        //                     }
        //                 ]

        //             });
        //         } else {
        //             // Tanggapan dari server adalah false
        //             console.error('Status error.');
        //         }
        //     }
        // });
 
    
    } );

   
</script>