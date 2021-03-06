<?php
    echo "<h3>Class Extends</h3>";

    /**
     * Tự động có tất cả khai báo biến thành viên của lớp cha
     * Tự động có tất cả các hàm thành viên giống như trong lớp cha, mà (theo mặc định) sẽ làm việc theo cùng phương thức như khi hàm đó làm trong lớp cha.
     */
    class MyParentClass
    {
        protected $var = 'a super call property';

        public function display()
        {
            echo $this->var . '<br>';
        }
        public function get()
        {
            echo $this->display();
        }
    }

    // Lớp được kế thùa
    class MySubclass extends MyParentClass
    {
        public function getVar()
        {
            return 'returning ' . $this->var;
        }
    }

    $a = new MySubClass();
    $a->display();
    echo $a->getVar();

    echo "<h3>Inheritance and Construct/destruct</h3>";
    /**
     * Khi lớp con được thừa kế mà trong đó có hàm khởi tạo __construct và __destruct thì sẽ không được xác định, khi đó ta dùng parent::__construct()
     */

    # Example

    /** Class B kế thừa Class A
     * Class MyClassA
     */
    class MyClassA
    {
        protected static $x = 'value x';

        function __construct()
        {
            echo 'In constructor of ' . __CLASS__ . '<br>';
        }
    }

    class MyClassB extends MyClassA
    {
        function __construct()
        {
            parent::__construct();
            echo parent::$x . '<br>';
            echo 'In constructor of ' . __CLASS__ . '<br>';
        }
    }

    $b = new MyClassB();
