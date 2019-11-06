<?php
namespace Dal;

/**
 * Description of DBEngine
 *
 * @author DDC ICT
 */
use Cake\Datasource\ConnectionManager;

class DBEngine 
{
    private static $dbCon = null;
    
    protected static function initDbCon() 
    {
        if (is_null(self::$dbCon))
        {
            self::$dbCon = ConnectionManager::get('default');
        }
    }
    
    public static function executeSelect($table,$columns=['*'],$where=[],$order=[])
    {
        self::initDbCon();
        $sql = 'SELECT ' . implode(',', $columns) . ' FROM ' . $table;
        if (is_array($where) && !empty($where))
        {
            $conditions = [];
            foreach ($where as $k => $v) 
            {
                $conditions[] = "$k='$v'";
            }
            $sql .= ' WHERE ' . implode(' AND ', $conditions);
        }
        elseif (!is_array($where) && strlen($where) > 0)
        {
            $sql .= ' WHERE ' . $where;
        }
        if (is_array($order) && !empty($order))
        {
            $cols = [];
            foreach ($order as $col => $ord) 
            {
                $cols[] = "$col $ord";
            }
            $sql .= ' ORDER BY ' . implode(', ', $cols);
        }
        elseif (!is_array($where) && strlen($where) > 0)
        {
            $sql .= ' ORDER BY 0 ASC';
        }
        /////////////////////////////////////////////////////
        return self::$dbCon->execute($sql)->fetchAll('assoc');
    }
    
    public static function executeInsert($table,$columns=[])
    {
        if (!is_array($columns) || empty($columns))
        {
            return FALSE;
        }
        self::initDbCon();
        $sql = "INSERT INTO {$table}(" . implode(',', array_keys($columns)) .  ") VALUES('" . implode("','", array_values($columns)) . "')";
        self::$dbCon->execute($sql);
        ////////////////////////////
        return self::$dbCon->execute('SELECT LAST_INSERT_ID() AS last_id')->fetchAll('assoc')['last_id'];
        
    }
    
    public static function executeUpdate($table,$columns=[],$where=[])
    {
        if (!is_array($columns) || empty($columns))
        {
            return FALSE;
        }
        self::initDbCon();
        $sql = "UPDATE {$table} SET ";
        $key_vals = [];
        foreach ($columns as $k => $v) 
        {
            $key_vals[] = "$k='$v'";
        }
        $sql .= implode(', ', $key_vals);
        if (is_array($where) && !empty($where))
        {
            $conditions = [];
            foreach ($where as $k => $v) 
            {
                $conditions[] = "$k='$v'";
            }
            $sql .= ' WHERE ' . implode(' AND ', $conditions);
        }
        elseif (!is_array($where) && strlen($where) > 0)
        {
            $sql .= ' WHERE ' . $where;
        }
        self::$dbCon->execute($sql);
        ////////////////////////////
        return self::$dbCon->execute('SELECT MYSQL_AFFECTED_ROWS() AS affected_rows')->fetchAll('assoc')['affected_rows'];        
    }
    
    public static function executeDelete($table,$where=[])
    {
        self::initDbCon();
        $sql = "DELETE FROM {$table}";
        if (is_array($where) && !empty($where))
        {
            $conditions = [];
            foreach ($where as $k => $v) 
            {
                $conditions[] = "$k='$v'";
            }
            $sql .= ' WHERE ' . implode(' AND ', $conditions);
        }
        elseif (!is_array($where) && strlen($where) > 0)
        {
            $sql .= ' WHERE ' . $where;
        }
        self::$dbCon->execute($sql);
        ////////////////////////////
        return self::$dbCon->execute('SELECT MYSQL_AFFECTED_ROWS() AS affected_rows')->fetchAll('assoc')['affected_rows'];
    }
}
