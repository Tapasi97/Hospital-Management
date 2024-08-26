<?php include('../include/header.php');?>
<?php include('../include/sidebar.php');?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Doctor List</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="doctorList">
                                <thead>
                                    <tr>
                                        <th> SL </th>
                                        <th> Image </th>
                                        <th> Name </th>
                                        <th> Reg No </th>
                                        <th> Mobile No </th>
                                        <th> State </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> 1 </td>
                                        <td class="py-1">
                                            <img src="../assets/images/faces/face21.jpg" alt="image">
                                        </td>
                                        <td> Herman Beck </td>
                                        <td> IND024WB7569804 </td>
                                        <td> 9093194968 </td>
                                        <td> West Bengal </td>
                                        <td>
                                            <button type="button" class="view-btn" data-bs-toggle="modal"
                                                data-bs-target="#exampleModald">
                                                <i class="fa-solid fa-eye fa-lg" style="color: #FFD43B;"></i>
                                            </button> |
                                            <a href="#"><i class="fa-solid fa-pen-to-square fa-lg"
                                                    style="color: #17e825;"></i></a> |
                                            <a href="#"><i class="fa-solid fa-trash fa-lg"
                                                    style="color: #e70d0d;"></i></a>
                                        </td>
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
    <div class="modal fade" id="exampleModald" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bolder" id="exampleModalLabel">Doctor Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div class="details" id="patDtls">
                        <img src="../assets/images/faces/face21.jpg" alt="" class="w-50">
                        <h3 class="mt-3 fw-bolder">Name: Pritam Pal</h3>
                        <h4 class="mt-3 fw-bolder">Registration No: IND024WB7569804</h4>
                        <h4 class="mt-2 fw-bolder">Mobile: 9093194968</h4>
                        <h4 class="mt-2 fw-bolder">Email: pritam.pal@gmail.com</h4>
                        <h4 class="mt-2 fw-bolder">Gender: Male</h4>
                        <h4 class="mt-2 fw-bolder">DOB: May 15, 2015</h4>
                        <h5 class="mt-2 fw-bolder">State: West Bengal</h5>
                        <h5 class="mt-2 fw-bolder">PIN Code: 743423</h5>
                        <h5 class="mt-2 fw-bolder">Address: Biswanathpur, Deganga, Barasat</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('../include/footer.php');?>