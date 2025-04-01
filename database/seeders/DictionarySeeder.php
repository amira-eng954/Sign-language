<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DictionarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("dictionaries")->insert([
           //numbers
            ["title" => "1", "media_path" => "videos/numbers/1.mp4", "category" => "numbers"],
            ["title" => "2", "media_path" => "videos/numbers/2.mp4", "category" => "numbers"],
            ["title" => "3", "media_path" => "videos/numbers/3.mp4", "category" => "numbers"],
            ["title" => "4", "media_path" => "videos/numbers/4.mp4", "category" => "numbers"],
            ["title" => "5", "media_path" => "videos/numbers/5.mp4", "category" => "numbers"],
            ["title" => "6", "media_path" => "videos/numbers/6.mp4", "category" => "numbers"],
            ["title" => "7", "media_path" => "videos/numbers/7.mp4", "category" => "numbers"],
            ["title" => "8", "media_path" => "videos/numbers/8.mp4", "category" => "numbers"],
            ["title" => "9", "media_path" => "videos/numbers/9.mp4", "category" => "numbers"],
            ["title" => "10", "media_path" => "videos/numbers/10.mp4", "category" => "numbers"],
            ["title" => "11", "media_path" => "videos/numbers/11.mp4", "category" => "numbers"],
            ["title" => "12", "media_path" => "videos/numbers/12.mp4", "category" => "numbers"],
            ["title" => "13", "media_path" => "videos/numbers/13.mp4", "category" => "numbers"],
            ["title" => "14", "media_path" => "videos/numbers/14.mp4", "category" => "numbers"],
            ["title" => "15", "media_path" => "videos/numbers/15.mp4", "category" => "numbers"],
            ["title" => "16", "media_path" => "videos/numbers/16.mp4", "category" => "numbers"],
            ["title" => "17", "media_path" => "videos/numbers/17.mp4", "category" => "numbers"],
            ["title" => "18", "media_path" => "videos/numbers/18.mp4", "category" => "numbers"],
            ["title" => "19", "media_path" => "videos/numbers/19.mp4", "category" => "numbers"],
            ["title" => "20", "media_path" => "videos/numbers/20.mp4", "category" => "numbers"],
           
           

            //months
        ["title" => "january", "media_path" => "videos/months/january.mp4", "category" => "months"],
         ["title" => "february", "media_path" => "videos/months/february.mp4", "category" => "months"],
         ["title" => "march", "media_path" => "videos/months/march.mp4", "category" => "months"],
         ["title" => "april", "media_path" => "videos/months/april.mp4", "category" => "months"],
         ["title" => "may", "media_path" => "videos/months/may.mp4", "category" => "months"],
         ["title" => "june", "media_path" => "videos/months/june.mp4", "category" => "months"],
         ["title" => "july", "media_path" => "videos/months/july.mp4", "category" => "months"],
         ["title" => "augus", "media_path" => "videos/months/august.mp4", "category" => "months"],
         ["title" => "septembe", "media_path" => "videos/months/september.mp4", "category" => "months"],
         ["title" => "october", "media_path" => "videos/months/october.mp4", "category" => "months"],
         ["title" => "november", "media_path" => "videos/months/november.mp4", "category" => "months"],
         ["title" => "december", "media_path" => "videos/months/december.mp4", "category" => "months"],
           //colors
           ["title" => "black", "media_path" => "videos/colors/black.mp4", "category" => "colors"],
           ["title" => "blue", "media_path" => "videos/colors/blue.mp4", "category" => "colors"],
           ["title" => "colors", "media_path" => "videos/colors/colors.mp4", "category" => "colors"],
           ["title" => "dark", "media_path" => "videos/colors/dark.mp4", "category" => "colors"],
           ["title" => "gray", "media_path" => "videos/colors/gray.mp4", "category" => "colors"],
           ["title" => "green", "media_path" => "videos/colors/green.mp4", "category" => "colors"],
           ["title" => "light", "media_path" => "videos/colors/light.mp4", "category" => "colors"],
           ["title" => "orange", "media_path" => "videos/colors/orange.mp4", "category" => "colors"],
           ["title" => "pink", "media_path" => "videos/colors/pink.mp4", "category" => "colors"],
           ["title" => "purple", "media_path" => "videos/colors/purple.mp4", "category" => "colors"],
           ["title" => "red", "media_path" => "videos/colors/red.mp4", "category" => "colors"],
           ["title" => "white", "media_path" => "videos/colors/white.mp4", "category" => "colors"],
           ["title" => "yellow", "media_path" => "videos/colors/yellow.mp4", "category" => "colors"],
         // litters
         ["title" => "a", "media_path" => "images/letters/a.jpg", "category" => "letters"],
         ["title" => "b", "media_path" => "images/letters/b.jpg", "category" => "letters"],
         ["title" => "c", "media_path" => "images/letters/c.jpg", "category" => "letters"],
         ["title" => "d", "media_path" => "images/letters/d.jpg", "category" => "letters"],
         ["title" => "e", "media_path" => "images/letters/e.jpg", "category" => "letters"],
         ["title" => "f", "media_path" => "images/letters/f.jpg", "category" => "letters"],
         ["title" => "g", "media_path" => "images/letters/g.jpg", "category" => "letters"],
         ["title" => "h", "media_path" => "images/letters/h.jpg", "category" => "letters"],
         ["title" => "i", "media_path" => "images/letters/i.jpg", "category" => "letters"],
         ["title" => "j", "media_path" => "images/letters/j.mp4", "category" => "letters"],
         ["title" => "k", "media_path" => "images/letters/k.jpg", "category" => "letters"],
         ["title" => "l", "media_path" => "images/letters/l.jpg", "category" => "letters"],
         ["title" => "m", "media_path" => "images/letters/m.jpg", "category" => "letters"],
         ["title" => "n", "media_path" => "images/letters/n.jpg", "category" => "letters"],
         ["title" => "o", "media_path" => "images/letters/o.jpg", "category" => "letters"],
         ["title" => "p", "media_path" => "images/letters/p.jpg", "category" => "letters"],
         ["title" => "q", "media_path" => "images/letters/q.jpg", "category" => "letters"],
         ["title" => "r", "media_path" => "images/letters/r.jpg", "category" => "letters"],
         ["title" => "s", "media_path" => "images/letters/s.jpg", "category" => "letters"],
         ["title" => "t", "media_path" => "images/letters/t.jpg", "category" => "letters"],
         ["title" => "u", "media_path" => "images/letters/u.jpg", "category" => "letters"],
         ["title" => "v", "media_path" => "images/letters/v.jpg", "category" => "letters"],
         ["title" => "w", "media_path" => "images/letters/w.jpg", "category" => "letters"],
         ["title" => "x", "media_path" => "images/letters/x.jpg", "category" => "letters"],
         ["title" => "y", "media_path" => "images/letters/y.jpg", "category" => "letters"],
         ["title" => "z", "media_path" => "images/letters/z.mp4", "category" => "letters"],

         // weeks
         ["title" => "friday", "media_path" => "videos/weeks/friday.mp4", "category" => "weeks"],
         ["title" => "saturday", "media_path" => "videos/weeks/saturday.mp4", "category" => "weeks"],
         ["title" => "sunday", "media_path" => "videos/weeks/sunday.mp4", "category" => "weeks"],
         ["title" => "monday", "media_path" => "videos/weeks/monday.mp4", "category" => "weeks"],
         ["title" => "tuesday", "media_path" => "videos/weeks/tuesday.mp4", "category" => "weeks"],
         ["title" => "wednesday", "media_path" => "videos/weeks/wednesday.mp4", "category" => "weeks"],
         ["title" => "thursday", "media_path" => "videos/weeks/thursday.mp4", "category" => "weeks"],
         
          // family
          ["title" => "aunt", "media_path" => "videos/family/aunt.mp4", "category" => "family"],
          ["title" => "boy", "media_path" => "videos/family/boy.mp4", "category" => "family"],
          ["title" => "brother", "media_path" => "videos/family/brother.mp4", "category" => "family"],
          ["title" => "cousin", "media_path" => "videos/family/cousin.mp4", "category" => "family"],
          ["title" => "daughter", "media_path" => "videos/family/daughter.mp4", "category" => "family"],
          ["title" => "family", "media_path" => "videos/family/family.mp4", "category" => "family"],
          ["title" => "father", "media_path" => "videos/family/father.mp4", "category" => "family"],
          ["title" => "fiance", "media_path" => "videos/family/fiance.mp4", "category" => "family"],
          ["title" => "gf", "media_path" => "videos/family/gf.mp4", "category" => "family"],
          ["title" => "girl", "media_path" => "videos/family/girl.mp4", "category" => "family"],
          ["title" => "gm", "media_path" => "videos/family/gm.mp4", "category" => "family"],
          ["title" => "husband", "media_path" => "videos/family/husband.mp4", "category" => "family"],
          ["title" => "mother", "media_path" => "videos/family/mother.mp4", "category" => "family"],
          ["title" => "sister", "media_path" => "videos/family/sister.mp4", "category" => "family"],
          ["title" => "son", "media_path" => "videos/family/son.mp4", "category" => "family"],
          ["title" => "uncle", "media_path" => "videos/family/uncle.mp4", "category" => "family"],
          ["title" => "wife", "media_path" => "videos/family/wife.mp4", "category" => "family"],
        ]);
       
    }
}
