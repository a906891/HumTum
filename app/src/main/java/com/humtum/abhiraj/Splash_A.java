package com.humtum.abhiraj;

import android.content.Intent;
import android.media.MediaPlayer;
import android.os.Bundle;
import android.os.CountDownTimer;
import androidx.appcompat.app.AppCompatActivity;
import android.view.Window;
import android.view.WindowManager;
import android.widget.VideoView;

import com.humtum.abhiraj.Main_Menu.MainMenuActivity;
import com.humtum.abhiraj.SimpleClasses.Variables;
public class Splash_A extends AppCompatActivity {

    private VideoView videoView;


    CountDownTimer countDownTimer;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_splash);


        videoView = (VideoView) findViewById(R.id.videoView);
        videoView.setVideoPath("android.resource://"+getPackageName()+"/"+R.raw.introflag);
        videoView.setOnCompletionListener(new MediaPlayer.OnCompletionListener() {
            @Override
            public void onCompletion(MediaPlayer mediaPlayer) {
                if(isFinishing())
                {
                    return;
                }
                else
                {
                    startActivity(new Intent(Splash_A.this,MainMenuActivity.class));
                    finish();
                }
            }
        });

        videoView.start();

    }

}
