$search = $_POST["search"]; 
if(!empty($search))
{
    $query = mysql_query("SELECT * FROM admin_user WHERE username like('%" . simple_protect($search) . "%') ORDER BY username") or die (mysql_error()); 
    while ($row = mysql_fetch_assoc($query))
    { //echo $query;
    echo strip_all($row['username'])."\n";
    }
}
else
{
    echo "No Records available";
}