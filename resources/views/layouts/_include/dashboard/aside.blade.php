<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Principal</div>
                    <a class="nav-link" href="{{ route('admin.home.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>

                    </a>
                    <div class="sb-sidenav-menu-heading">Gerir</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                        Funcionários
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="#">Cadastrar</a>
                            <a class="nav-link" href="#">Listar</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBook" aria-expanded="false" aria-controls="collapseBook">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Livros
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseBook" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link" href="{{ route('admin.book.create.index') }}">Cadastrar</a>
                            <a class="nav-link" href="{{ route('admin.book.list.index') }}">Listar</a>
                        </nav>
                    </div>
                <div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSupplier" aria-expanded="false" aria-controls="collapseSupplier">
                        <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                        Fornecedores
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseSupplier" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link" href="{{ route('admin.supplier.create.index') }}">Cadastrar</a>
                            <a class="nav-link" href="{{ route('admin.supplier.list.index') }}">Listar</a>
                        </nav>
                    </div>
                </div>
                <div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCostumer" aria-expanded="false" aria-controls="collapseCostumer">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                        Clientes
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseCostumer" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link" href="{{ route('admin.costumer.create.index') }}">Cadastrar</a>
                            <a class="nav-link" href="{{ route('admin.costumer.list.index') }}">Listar</a>
                        </nav>
                    </div>
                </div>

                <div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBookSupplier " aria-expanded="false" aria-controls="collapseBookSupplier ">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                       Livros e Fornecedores
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseBookSupplier" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link" href="{{ route('admin.bookSupplier.create.index') }}">Cadastrar</a>
                            <a class="nav-link" href="{{ route('admin.bookSupplier.list.index') }}">Listar</a>
                        </nav>
                    </div>
                </div>


                <div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePayments" aria-expanded="false" aria-controls="collapsePayments">
                        <div class="sb-nav-link-icon"><i class="fas fa-money"></i></div>
                       Tipo de Pagamento
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePayments" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link" href="{{ route('admin.payment.create.index') }}">Cadastrar</a>
                            <a class="nav-link" href="{{ route('admin.payment.list.index') }}">Listar</a>
                        </nav>
                    </div>
                </div>

                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logado como:</div>
                Administrador
            </div>
        </nav>
    </div>
