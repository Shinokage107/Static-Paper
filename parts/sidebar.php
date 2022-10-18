<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;" id="sideBar">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4">StaticPaper</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <!--
        <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#home" />
                </svg>
                Home
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#speedometer2" />
                </svg>
                Dashboard
            </a>
        </li>
        -->
        <li class="nav-item">
            <a href="#" class="nav-link text-white">
                <img src="https://pbs.twimg.com/media/E7FU3kzVkAEezcz.jpg" alt="" width="32" height="32"
                    class="rounded-circle me-2">
                <strong>Boosted bonobos</strong>
            </a>
        </li>
        <br>
        <li class="nav-item">
            <button type="button" class="btn btn-outline-danger addGroupBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                </svg>
            </button>
            <div class="tutorialHere"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-caret-left" viewBox="0 0 16 16">
                    <path
                        d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z" />
                </svg>
                Create a group here !
            </div>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="<?php echo $profilePic; ?>" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong><?php echo $userName; ?></strong>
        </a>
        <div class="tutorialHere"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-caret-left" viewBox="0 0 16 16">
                <path
                    d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z" />
            </svg>
            Login via Discord !
        </div>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <?php
if (session('access_token')) {
    echo '<li><a class="dropdown-item" href="http://localhost/index.php?user=' . $user->id . '">Profile</a></li>';
    echo '<li>';
    echo '<hr class="dropdown-divider">';
    echo '</li>';
    echo '<li><a class="dropdown-item" href="http://localhost/index.php?action=logout">Sign out</a></li>';
} else {
    echo '<li><a class="dropdown-item" href="http://localhost/index.php?action=login">Login</a></li>';
}
?>
        </ul>
    </div>
</div>