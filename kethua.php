<html>
<body>
    <p id = "demo"></p>
    <script>
        function Person() {
            this.firstName = 'Per';
            this.lastName = 'son';
            this.sayName = function() { return this.firstName + ' ' + this.lastName };
          }
          
          // Viết một Constructor Function khác
          function SuperMan(firstName, lastName) {
              Person.call(this, firstName, lastName); // su dung ham call de ke thua
            this.firstName = firstName;
            this.lastName = lastName;
          }
          
          //SuperMan sẽ kế thừa các thuộc tính của Person
          // Sử dụng prototype để kế thừa
        //   SuperMan.prototype = new Person();
          
          // Tạo một object mới bằng Constructor Function 
          var sm = new SuperMan('Ngoc', 'Khanh');
          document.getElementById("demo").innerHTML = sm.sayName(); // Hàm này kế thừa từ prototype của Person
          
    </script>
</body>
</html>