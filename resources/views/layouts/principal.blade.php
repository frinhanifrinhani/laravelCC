<html>
   <head>
      <link href="/css/bootstrap.min.css" rel="stylesheet"  type="text/css">
      <link href="/css/custom.css" rel="stylesheet">
      <title>Controle de estoque</title>
   </head>
   <body>
      <div class="container">
         <nav class="navbar navbar-default">
            <div class="container-fluid">
               <div class="navbar-header">
                  <a class="navbar-brand" href="/produtos">
                  Estoque Laravel
                  </a>
               </div>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="{{action('ProdutoController@lista')}}">Listagem</a></li>
                  <li><a href="{{action('ProdutoController@novo')}}">Novo</a></li>
                  <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                    </a></li>
                  <!--<li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li> -->
                    
               </ul>
            </div>
         </nav>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
         @yield('conteudo')
         <footer class="footer">
            <p>© Livro de Laravel da Casa do Código.</p>
         </footer>
      </div>
   </body>
</html>