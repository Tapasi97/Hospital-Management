<?php include('../include/header.php');?>
<?php include('../include/sidebar.php');?>


<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="hdd_prt">
                            <h4 class="card-title">Recent Appointments</h4>
                            <!-- Button trigger modal -->
                            <button type="button" id="bookAppointmentButton" class="btn btn-success"
                                data-bs-toggle="modal" data-bs-target="#exampleModalapp">
                                Book Appointment
                            </button>
                        </div>
                        <div class="table-responsive pt-3">
                            <!----------------- Admin Table ----------------->
                            <table id="adminTable" class="table table-bordered table-striped table-hover dash_table">
                                <thead class="table-dark">
                                    <tr>
                                        <th> <input type="checkbox" name="select-all" id="select-all"> </th>
                                        <th> Id </th>
                                        <th> Patient Name </th>
                                        <th> Department </th>
                                        <th> Appointment Date </th>
                                        <th> Time </th>
                                        <th> Doctor Name </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> <input type="checkbox" name="select-all" id="select-all"> </td>
                                        <td> 1 </td>
                                        <td> John Doe </td>
                                        <td> ENT </td>
                                        <td> May 15, 2024 </td>
                                        <td> 11.30 am </td>
                                        <td> Dr. Subham Pal </td>
                                        <td> <select name="" id="" class="tk_actn">
                                                <option value="">Take Action</option>
                                                <option value="">Approve</option>
                                                <option value="">Reject</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <input type="checkbox" name="select-all" id="select-all"> </td>
                                        <td> 2 </td>
                                        <td> Herman Beck </td>
                                        <td> Cardiology </td>
                                        <td> May 16, 2025 </td>
                                        <td> 12.30 am </td>
                                        <td> Dr. Tapasi Chatterjee </td>
                                        <td> <select name="" id="" class="tk_actn">
                                                <option value="">Take Action</option>
                                                <option value="">Approve</option>
                                                <option value="">Reject</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <!----------------- Doctor Table ----------------->
                            <table id="doctorTable" class="table table-bordered table-striped table-hover dash_table">
                                <thead class="table-dark">
                                    <tr>
                                        <th> <input type="checkbox" name="select-all" id="select-all"> </th>
                                        <th> Id </th>
                                        <th> Patient Name </th>
                                        <th> Department </th>
                                        <th> Appointment Date </th>
                                        <th> Time </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> <input type="checkbox" name="select-all" id="select-all"> </td>
                                        <td> 1 </td>
                                        <td> John Doe </td>
                                        <td> ENT </td>
                                        <td> May 15, 2024 </td>
                                        <td> 11.30 am </td>
                                        <td> <select name="" id="" class="tk_actn">
                                                <option value="">Take Action</option>
                                                <option value="">Approve</option>
                                                <option value="">Reject</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <input type="checkbox" name="select-all" id="select-all"> </td>
                                        <td> 2 </td>
                                        <td> Herman Beck </td>
                                        <td> Cardiology </td>
                                        <td> May 16, 2025 </td>
                                        <td> 12.30 am </td>
                                        <td> <select name="" id="" class="tk_actn">
                                                <option value="">Take Action</option>
                                                <option value="">Approve</option>
                                                <option value="">Reject</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <!----------------- Patient Table ----------------->
                            <table id="patientTable" class="table table-bordered table-striped table-hover dash_table">
                                <thead class="table-dark">
                                    <tr>
                                        <th> <input type="checkbox" name="select-all" id="select-all"> </th>
                                        <th> Id </th>
                                        <th> Doctor Name </th>
                                        <th> Department </th>
                                        <th> Appointment Date </th>
                                        <th> Time </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> <input type="checkbox" name="select-all" id="select-all"> </td>
                                        <td> 1 </td>
                                        <td> Dr. John Doe </td>
                                        <td> ENT </td>
                                        <td> May 15, 2024 </td>
                                        <td> 11.30 am </td>

                                        <td> Approved </td>
                                    </tr>
                                    <tr>
                                        <td> <input type="checkbox" name="select-all" id="select-all"> </td>
                                        <td> 2 </td>
                                        <td> Dr. Herman Beck </td>
                                        <td> Cardiology </td>
                                        <td> May 16, 2025 </td>
                                        <td> 12.30 am </td>
                                        <td> Approved </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="exampleModalapp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Schedule Appointment</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-sample">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Full Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="Patient Name" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Contact No</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Gender</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="" id="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Date of Birth</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" placeholder="dd/mm/yyyy" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">State</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Postcode</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr style="margin-top:-20px;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Choose Doctor</label>
                                    <div class="col-sm-10">
                                        <select class="form-select">
                                            <option>Select One</option>
                                            <option>Dr. Pritam Pal(Cardiology)</option>
                                            <option>Dr. Subham Pal(Corona)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Appointment Date</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Department Name</label>
                                    <div class="col-sm-9">
                                        <select class="form-select">
                                            <option>Cardiology</option>
                                            <option>Corona</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="text-center">
                                <button type="button" class="btn btn-outline-primary btn-icon-text px-5">
                                    <i class="ti-file btn-icon-prepend"></i> Book Now </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <?php include('../include/footer.php');?>