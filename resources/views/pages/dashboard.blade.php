<div class="sidebar">
    <div class="top">
        <div class="profile">
            <div class="avatar">
                {{ strtoupper(substr(session('user')->name, 0, 1)) }}
            </div>
            <div class="info">
                <h2>{{ session('user')->name }}</h2>
                <p class="email">{{ session('user')->email }}</p>
                  <p class ="email">Admin</p>
            </div>
        </div>

        <nav>
            <a href="{{ url('/dashboard') }}" class="active">Dashboard</a>
            <a href="{{ url('/users') }}">Manage Users</a>
            <a>Orders</a>
            <a>Products</a>
            <a>Transactions</a>
            <a>Analytics</a>
            <a href="{{ url('/settings') }}">Settings</a>
        </nav>
    </div>

    <div class="bottom">
        <a href="{{ url('/logout') }}" class="logout">Logout</a>
    </div>
</div>

<style>
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background-color: #f5f1ec;
    }

    .sidebar {
        width: 260px;
        height: 100vh;
        background: linear-gradient(180deg, #4b2e2b, #2f1b16);
        color: #f5ede3;
        padding: 24px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: 4px 0 12px rgba(0,0,0,0.2);
    }


    .profile {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 28px;
    }

    .avatar {
        width: 48px;
        height: 48px;
        background-color: #c7a17a;
        color: #2f1b16;
        border-radius: 50%;
        display: grid;
        place-items: center;
        font-weight: 600;
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    .info h2 {
        font-size: 1.1rem;
        margin: 0;
        line-height: 1.2;
    }

    .email {
        font-size: 0.85rem;
        color: #d7c4b2;
        word-break: break-all;
    }

   
    nav {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    nav a,
    .logout {
        display: block;
        padding: 12px 16px;
        text-decoration: none;
        color: #f5ede3;
        background-color: rgba(255, 255, 255, 0.08);
        border-radius: 10px;
        transition: all 0.25s ease;
        font-size: 0.95rem;
    }

    nav a:hover {
        background-color: #c7a17a;
        color: #2f1b16;
        transform: translateX(4px);
    }

    nav a.active {
        background-color: #c7a17a;
        color: #2f1b16;
        font-weight: 500;
    }


    .logout {
        background-color: #ff6b6b;
        text-align: center;
    }

    .logout:hover {
        background-color: #e04848;
        color: #fff;
    }


    @media (max-width: 768px) {
        .sidebar {
            width: 220px;
        }
    }
</style>
