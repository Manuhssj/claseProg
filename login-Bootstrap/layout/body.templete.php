<div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 d-none d-sm-block ">
                <aside class="bg-light">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="http://localhost/login-Boostrap/products/products.php">Productos</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled">Disabled</a>
                        </li>
                      </ul>
                </aside>
            </div>
            <div class="col-lg-10">
                <div class="row d-flex flex-row justify-content-between mt-2 border-bottom">
                    <div class="col mt-4 mb-4">
                        <h1>Productos</h1>
                    </div>
                    <div class="col-2"><button class="btn btn-info mb-4 mt-4" data-bs-toggle="modal" data-bs-target="#addModal">Añadir producto</button></div>
                </div>
                <div class="row">
                    <?php for($i = 0; $i<12; $i++): ?>
                      <div class="col-sm-3 col-md-3 mb-5">
                        <div class="card bg-light " style="width: 20rem;">
                            <img src="../img/img.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title ">Card title</h5>
                              <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="row">

                                    <div class="col">
                                        <a href="#" class="btn btn-warning w-100" data-bs-toggle="modal" data-bs-target="#editModal">Editar</a>
                                    </div>

                                    <div class="col">
                                        <a href="#" class="btn btn-danger w-100" onclick="remove()">Eliminar</a>
                                    </div>

                                    <a href="detalleProducto.php" class="btn btn-info mt-2" >Detalles</a>
                                </div>
                            </div>
                        </div>
                      </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal Añadir</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal Editar</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>