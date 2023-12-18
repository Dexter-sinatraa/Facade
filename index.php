<?php

// Підсистема аудіоплеєра
class AudioPlayer {
    public function turnOn() {
        echo "Audio Player is ON<br>";
    }

    public function turnOff() {
        echo "Audio Player is OFF<br>";
    }

    public function playMusic() {
        echo "Playing music<br>";
    }

    public function stopMusic() {
        echo "Stopping music<br>";
    }
}

// Підсистема світлового обладнання
class Lights {
    public function turnOn() {
        echo "Lights are ON<br>";
    }

    public function turnOff() {
        echo "Lights are OFF<br>";
    }

    public function autoAdjust() {
        echo "Automatic light adjustment<br>";
    }
}

// Фасад для автомобільної системи
class CarSystemFacade {
    private $audioPlayer;
    private $lights;

    public function __construct() {
        $this->audioPlayer = new AudioPlayer();
        $this->lights = new Lights();
    }

    public function startCar() {
        $this->audioPlayer->turnOn();
        $this->lights->turnOn();
        echo "Car is started and ready to go<br>";
    }

    public function stopCar() {
        $this->audioPlayer->turnOff();
        $this->lights->turnOff();
        echo "Car is stopped<br>";
    }

    public function playMusic() {
        $this->audioPlayer->playMusic();
    }

    public function stopMusic() {
        $this->audioPlayer->stopMusic();
    }

    public function autoAdjustLights() {
        $this->lights->autoAdjust();
    }
}

// Використання паттерна Фасад
$carSystem = new CarSystemFacade();

$carSystem->startCar();
$carSystem->playMusic();
$carSystem->autoAdjustLights();
$carSystem->stopMusic();
$carSystem->stopCar();
