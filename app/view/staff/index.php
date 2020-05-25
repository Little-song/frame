<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    table {
        border-collapse: collapse;
        border: 1px solid;
        width: 50%;
        text-align: center;
    }
    th,
    td {
        border: 1px solid;
        padding: 5px;
    }
    tr:first-child {
        background-color: #eee;
    }
</style>
<body>
    <h3>员工管理系统</h3>
    <table>
    <tr>
            <th>id</th>
            <th>姓名</th>
            <th>职位</th>
            <th>手机</th>
            <th>管理</th>
        </tr>
    <?php foreach ($staffs as $staff): ?>
        <tr>
            <td><?= $this->e($staff['id']) ?></td>
            <td><?= $this->e($staff['name']) ?></td>
            <td><?= $this->e($staff['position']) ?></td>
            <td><?= $this->e($staff['mobile']) ?></td>
            <td><button>编辑</button><button>删除</button></td>
        </tr>
    <?php endforeach ?>
    
    </table>
</body>
</html>