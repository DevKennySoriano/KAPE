<div class="page">
    <div class="card full">
        <div class="header">
             <a href="/dashboard" class="back">Back to Dashboard</a>
        
           
        </div>

        <div class="table-wrapper">
             <h2>Users List</h2>
            Total number of User(s) :  <span>{{ count($users) }}</span>
            <hr>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th class="actions-col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="actions">
                            <a href="/users/{{ $user->id }}/edit" class="edit">Edit</a>
                            <a href="/users/{{ $user->id }}/delete"
                               class="delete"
                               onclick="return confirm('Delete user?')">
                               Delete
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr class="empty">
                        <td colspan="3">No users found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="footer"><div>
    </div>
</div>

<style>
    .page {
    height: 100vh;
    display: flex;
    align-items: stretch;
    justify-content: center;
    background-color: #f5f1ec;
    font-family: 'Poppins', sans-serif;
    padding: 30px;
}

.card.full {
    width: 100%;
    max-width: 1000px;
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 12px 32px rgba(0,0,0,0.08);
    display: flex;
    flex-direction: column;
}


.header {
    padding: 24px 28px;
    border-bottom: 1px solid #eee;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.header h2 {
    margin: 0;
    color: #4b2e2b;
}


.table-wrapper {
    flex: 1;
    overflow-y: auto;
    padding: 0 28px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

thead {
    position: sticky;
    top: 0;
    background-color: #f0e7de;
    z-index: 1;
}

th, td {
    padding: 14px;
    text-align: left;
}

th {
    font-weight: 600;
    color: #4b2e2b;
}

td {
    border-top: 1px solid #eee;
    color: #3a2a24;
}

tr:hover td {
    background-color: #faf6f2;
}


tr.empty td {
    text-align: center;
    color: #8b7a6a;
    padding: 40px 0;
}


.actions {
    display: flex;
    gap: 10px;
}

.actions-col {
    width: 160px;
}

.edit {
    background-color: #c7a17a;
    color: #2f1b16;
    padding: 6px 12px;
    border-radius: 8px;
    text-decoration: none;
}

.delete {
    background-color: #ff6b6b;
    color: #fff;
    padding: 6px 12px;
    border-radius: 8px;
    text-decoration: none;
}

.edit:hover { background-color: #b18b63; }
.delete:hover { background-color: #e04848; }


.footer {
    padding: 14px 28px;
    border-top: 1px solid #eee;
    font-size: 0.85rem;
    color: #8b7a6a;
    display: flex;
    justify-content: flex-end;
}


.back {
    text-decoration: none;
    background-color: #e5ddd3;
    color: #4b2e2b;
    padding: 8px 14px;
    border-radius: 10px;
}

.back:hover {
    background-color: #d4c7b9;
}

</style>