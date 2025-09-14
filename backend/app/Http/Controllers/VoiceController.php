<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VoiceController extends Controller
{
    public function speak(Request $request)
    {
        $text = $request->input('text');
        if (!$text || !trim($text)) {
            return response()->json(['error' => 'No text provided'], 400);
        }

        $wavFile = storage_path('app/public/voice.wav');
        $mp3File = storage_path('app/public/voice.mp3');

        // TTS باستخدام PowerShell وSAPI
        $psCommand = "Add-Type –AssemblyName System.Speech; 
        \$speak = New-Object System.Speech.Synthesis.SpeechSynthesizer; 
        \$speak.SetOutputToWaveFile('$wavFile'); 
        \$speak.Speak('$text');";

        exec("PowerShell -Command \"$psCommand\"");

        // تحويل WAV إلى MP3 باستخدام ffmpeg
        exec("ffmpeg -y -i \"$wavFile\" \"$mp3File\"");

        return response()->download($mp3File, 'voice.mp3', [
            'Content-Type' => 'audio/mpeg'
        ]);
    }
}
