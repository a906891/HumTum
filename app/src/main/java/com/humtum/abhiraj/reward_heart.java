package com.humtum.abhiraj;

import android.content.SharedPreferences;
import android.os.Bundle;
import android.widget.Button;
import android.widget.TextView;

import androidx.appcompat.app.AppCompatActivity;

public class reward_heart extends AppCompatActivity {


    public static final String SHARED_PREFS = "sharedPrefs";

    private TextView textview;
    private Button button;

    private String n = "1";
    private String a;
    private int b;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_rewar_heart);



        final SharedPreferences sharedPreferences = getSharedPreferences(SHARED_PREFS,MODE_PRIVATE);

        // If Heart is opened again
        if(sharedPreferences.contains("heart"))
        {
            a = sharedPreferences.getString("heart","0");
            b = Integer.parseInt(a);
            b++;
            n = Integer.toString(b);
            final SharedPreferences sharedPreferences1 = getSharedPreferences(SHARED_PREFS,MODE_PRIVATE);
            SharedPreferences.Editor editor = sharedPreferences1.edit();
            editor.putString("heart", n);
            editor.apply();

        }
        // If Heart is opened first time
        else
            {
                final SharedPreferences sharedPreferences1 = getSharedPreferences(SHARED_PREFS,MODE_PRIVATE);
                SharedPreferences.Editor editor = sharedPreferences1.edit();
                editor.putString("heart", n);
                editor.apply();
            }



    }




}
