<?php

require "../vendor/autoload.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php getBootstrap() ?>
    <link rel="stylesheet" href="../css/codebox.css">
    <title>Interface</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="">PHP POO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="../index.php">Home</a>
                    <a class="nav-link" href="classes.php">Classes</a>
                    <a class="nav-link" href="static.php">Métodos Statics</a>
                    <a class="nav-link" href="composicao.php">Composição</a>
                    <a class="nav-link" href="assossiacao.php">Assossiação</a>
                    <a class="nav-link" href="agregacao.php">Agregação</a>
                    <a class="nav-link active" aria-current="page" href="#">Interface</a>
                    <a class="nav-link" href="polimorfismo.php">Polimorfismo</a>
                    <a class="nav-link" href="__magicos.php">Métodos Mágicos</a>
                    <a class="nav-link" href="exception.php">Exceptions</a>
                </div>
            </div>
        </div>
    </nav>

    <?php

    interface VehicleInterface
    {
        public function start();
        public function stop();
    }

    class Vehicle
    {
        private $vehicle;

        public function __construct(VehicleInterface $vehicle)
        {
            $this->vehicle = $vehicle;
        }

        public function start()
        {
            return $this->vehicle->start();
        }

        public function stop()
        {
            return $this->vehicle->stop();
        }
    }

    class Car implements VehicleInterface
    {
        public function start()
        {
            echo "Car is starting.<br>";
        }

        public function stop()
        {
            echo "Car is stopping.<br>";
        }
    }

    class Motorcycle implements VehicleInterface
    {
        public function start()
        {
            echo "Motorcycle is starting.<br>";
        }

        public function stop()
        {
            echo "Motorcycle is stopping.<br>";
        }
    }

    class Truck implements VehicleInterface
    {
        public function start()
        {
            echo "Truck is starting.<br>";
        }

        public function stop()
        {
            echo "Truck is stopping.<br>";
        }
    }

    class Train implements VehicleInterface
    {
        public function start()
        {
            echo "Train is starting.<br>";
        }

        public function stop()
        {
            echo "Train is stopping.<br>";
        }
    }


    $vehicle = new Vehicle(new Train);
    $vehicle->start();
    $vehicle->stop();

    ?>
    <code style="height: 70vh;">
        <textarea class="code-box" readonly>
            interface VehicleInterface
    {
        public function start();
        public function stop();
    }

    class Vehicle
    {
        private $vehicle;

        public function __construct(VehicleInterface $vehicle)
        {
            $this->vehicle = $vehicle;
        }

        public function start()
        {
            return $this->vehicle->start();
        }

        public function stop()
        {
            return $this->vehicle->stop();
        }
    }

    class Car implements VehicleInterface
    {
        public function start()
        {
            echo "Car is starting.<br>";
        }

        public function stop()
        {
            echo "Car is stopping.<br>";
        }
    }

    class Motorcycle implements VehicleInterface
    {
        public function start()
        {
            echo "Motorcycle is starting.<br>";
        }

        public function stop()
        {
            echo "Motorcycle is stopping.<br>";
        }
    }

    class Truck implements VehicleInterface
    {
        public function start()
        {
            echo "Truck is starting.<br>";
        }

        public function stop()
        {
            echo "Truck is stopping.<br>";
        }
    }

    class Train implements VehicleInterface
    {
        public function start()
        {
            echo "Train is starting.<br>";
        }

        public function stop()
        {
            echo "Train is stopping.<br>";
        }
    }


    $vehicle = new Vehicle(new Train);
    $vehicle->start();
    $vehicle->stop();
        </textarea>
    </code>
</body>

</html>