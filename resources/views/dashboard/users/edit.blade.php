<div class="page">
    <div class="card">
        <h2>Edit User</h2>

        <form method="POST" action="/users/{{ $user->id }}/update">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ $user->name }}"
                    required
                >
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ $user->email }}"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password">
                    New Password
                    <span>(optional)</span>
                </label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Leave blank to keep current password"
                >
            </div>

            <div class="actions">
                <button type="submit">Update User</button>
                <a href="/users" class="back">Cancel</a>
            </div>
        </form>
    </div>
</div>

<style>
  .page {
    min-height: 100vh;
    display: flex;
    align-items: center;      /* vertical center */
    justify-content: center;  /* horizontal center */
    background-color: #f5f1ec;
    font-family: 'Poppins', sans-serif;
    padding: 20px;
}
    .card {
        width: 1000px;
        height:auto;
        background: #fff;
        padding: 28px;
        border-radius: 14px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    }

    h2 {
        margin-bottom: 24px;
        color: #4b2e2b;
    }

    .form-group {
        margin-bottom: 18px;
    }

    label {
        display: block;
        margin-bottom: 6px;
        font-weight: 500;
        color: #4b2e2b;
    }

    label span {
        font-weight: 400;
        font-size: 0.85rem;
        color: #8b7a6a;
    }

    input {
        width: 100%;
        padding: 12px 14px;
        border-radius: 10px;
        border: 1px solid #ddd;
        font-size: 0.95rem;
        transition: border 0.2s, box-shadow 0.2s;
    }

    input:focus {
        outline: none;
        border-color: #c7a17a;
        box-shadow: 0 0 0 3px rgba(199,161,122,0.25);
    }

    .actions {
        display: flex;
        gap: 12px;
        margin-top: 24px;
    }

    button {
        flex: 1;
        background-color: #4b2e2b;
        color: #fff;
        border: none;
        padding: 12px;
        border-radius: 10px;
        font-size: 0.95rem;
        cursor: pointer;
        transition: background 0.25s ease;
    }

    button:hover {
        background-color: #2f1b16;
    }

    .back {
        flex: 1;
        text-align: center;
        padding: 12px;
        border-radius: 10px;
        text-decoration: none;
        background-color: #e5ddd3;
        color: #4b2e2b;
        transition: background 0.25s ease;
    }

    .back:hover {
        background-color: #d4c7b9;
    }
</style>
