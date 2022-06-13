<nav class="navbar navbar-expand-lg navbar-dark mainbg">
  <div class="container">
    <a class="navbar-brand" href="/data-mahasiswa">Simple Siakad</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link {{ ($title === "Data Mahasiswa") ? 'active' : '' }}" href="/data-mahasiswa">Data Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Input Data Mahasiswa") ? 'active' : '' }}" href="/create-mahasiswa">Input Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "About Me") ? 'active' : '' }}" href="/about-me">About Me</a>
        </li>
      </ul>
    </div>
  </div> 
</nav>