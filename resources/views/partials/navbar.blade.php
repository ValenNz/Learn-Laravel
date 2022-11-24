{{-- Halaman untuk menyimpan bagian bagian navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">MY Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        {{-- jika title = home tambahkan kelas aktif jika tidak nggak usah --}}
        <a class="nav-link" {{ ($active === "Home") ? 'active' : '' }} href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" {{ ($active === "About") ? 'active' : '' }} href="/about">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" {{ ($active === "Posts") ? 'active' : '' }} href="/posts">blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" {{ ($active === "Category") ? 'active' : '' }} href="/categories">Categories</a>
      </li>
    </ul>

    <ul class="navbar-nav ms-auto mx-4">
      <li class="nav-item">
        <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i>Login</a>
      </li>

    </ul>
  </div>
</nav>