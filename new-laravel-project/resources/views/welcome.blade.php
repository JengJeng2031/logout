<!DOCTYPE html>
<html>
    <head>
        <title>JavaScript 101</title>
        <body>
            <h1 id="myh1">Javascript</h1>
            <button onclick="alert('Hello world')">Click Me!</button>
            <input type="text" id="my_number">
            <button onclick="myFunction()">Submit Number</button>
            <script>
                function myFunction(){
                    console.log(document.getElementById('my_number').value);
                    console.log('Click submit number')
                }
                console.log("Hello world!!!")
                let myval;
                myval = '10';
                myval2 = '2';
                console.log(myval,myval2)
                myval3 = parseInt(myval) + parseInt(myval2);
                console.log(myval3);

                myval3 = myval - myval2;
                console.log(myval3);

                myval3 = myval * myval2;
                console.log(myval3);

                myval3 = myval / myval2;
                console.log(myval3);

            </script>
            <script>
                let myval4 = [1,2,3,4];
                myval4 [4] = 5;
                console.log(myval4);

                for (i= 0;i<myval4.length;i++){
                    console.log("in for",myval4[i])
                }

                console.log(document.getElementById('myh1'.innerHTML))
            </script>
        </body>
    </head>
</html>