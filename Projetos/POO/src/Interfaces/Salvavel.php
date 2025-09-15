<?php

interface Salvavel{
    public function salvar();
    public static function carregar($id);
}