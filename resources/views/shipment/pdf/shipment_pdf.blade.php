<!DOCTYPE html>
<html lang="en">
<head>
    <style>

        html{
            margin: 0;
            padding: 0;
        }

        .bordered {
            border: 1px solid;
        }

    </style>
</head>
<body>
    
    <table class="bordered">

        <tr >
            <td class="bordered">
                Cliente: 
            </td>

            <td>
                {{ $customer->name }}
            </td>

        </tr>
    </table>

</body>
</html>