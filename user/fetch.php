$user_id = $_SESSION['user_id'];
                        $sql = "SELECT * from usulan a 
                                join kawasan c on a.kawasan_id=c.id
                                join program d on a.program_id=d.id
                                join sasaran e on a.sasaran_id=e.id 
                                join villages f on f.id= a.desa_id
                                join districts g on g.id=a.kecamatan_id
                                where user_id=$user_id";