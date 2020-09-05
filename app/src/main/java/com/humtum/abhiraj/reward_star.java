package com.humtum.abhiraj;

import android.content.SharedPreferences;
import android.os.Bundle;
import android.widget.Button;
import android.widget.TextView;

import androidx.appcompat.app.AppCompatActivity;

public class reward_star extends AppCompatActivity {



    public static final String SHARED_PREFS = "sharedPrefs";

    private TextView textview;
    private Button button;


    private String n = "1";
    private String a;
    private int b;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_rewar_star);


        final SharedPreferences sharedPreferences = getSharedPreferences(SHARED_PREFS,MODE_PRIVATE);

        if(sharedPreferences.contains("star"))
        {
            a = sharedPreferences.getString("star","0");
            b = Integer.parseInt(a);
            b++;
            n = Integer.toString(b);
            final SharedPreferences sharedPreferences1 = getSharedPreferences(SHARED_PREFS,MODE_PRIVATE);
            SharedPreferences.Editor editor = sharedPreferences1.edit();
            editor.putString("star", n);
            editor.apply();

        }
        else
        {
            final SharedPreferences sharedPreferences1 = getSharedPreferences(SHARED_PREFS,MODE_PRIVATE);
            SharedPreferences.Editor editor = sharedPreferences1.edit();
            editor.putString("star", n);
            editor.apply();
        }


    }


}
