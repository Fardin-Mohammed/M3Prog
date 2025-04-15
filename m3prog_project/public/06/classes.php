<?php

class Klas {
    public string $naam;

    public function __construct(string $naam) {
        $this->naam = $naam;
    }
}

class Student {
    public string $naam;
    public int $leeftijd;
    public string $kracht;
    public Klas $klas;

    public function __construct(string $naam, int $leeftijd, string $kracht, Klas $klas) {
        $this->naam = $naam;
        $this->leeftijd = $leeftijd;
        $this->kracht = $kracht;
        $this->klas = $klas;
    }
}
