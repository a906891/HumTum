package com.humtum.abhiraj;

import android.content.Intent;
import android.content.SharedPreferences;
import android.content.pm.PackageManager;
import android.net.Uri;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;

import com.humtum.abhiraj.SimpleClasses.Variables;

import java.net.URLEncoder;

public class chest extends AppCompatActivity {

    public static final String SHARED_PREFS = "sharedPrefs";

    private TextView textheart;
    private TextView textbulb;
    private TextView textstar;
    private TextView textvirus;
    private TextView textcoin;

    private int heartsN = 0;
    private int starsN = 0;
    private int bulbsN = 0;
    private int coinsN = 0;
    private int virusN = 0;

    ImageView Heart;
    ImageView Coin;
    ImageView Bulb;
    ImageView Virus;
    ImageView Star;

    Button RedeemBtn;




    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_chest);

        RedeemBtn = findViewById(R.id.RedeemSubmitButton);

        Heart = findViewById(R.id.heartImg);
        Star = findViewById(R.id.starImg);
        Coin = findViewById(R.id.coinImg);
        Bulb = findViewById(R.id.bulbImg);
        Virus = findViewById(R.id.virusImg);


        textheart = (TextView)findViewById(R.id.ShowHeart);
        textbulb = (TextView)findViewById(R.id.ShowBulb);
        textstar = (TextView)findViewById(R.id.ShowStar);
        textvirus = (TextView)findViewById(R.id.ShowVirus);
        textcoin = (TextView)findViewById(R.id.ShowCoin);

        SharedPreferences sharedPreferences = getSharedPreferences(SHARED_PREFS,MODE_PRIVATE);
        textheart.setText(sharedPreferences.getString("heart","0"));

        textcoin.setText(sharedPreferences.getString("coin","0"));

        textbulb.setText(sharedPreferences.getString("bulb","0"));

        textstar.setText(sharedPreferences.getString("star","0"));

        textvirus.setText(sharedPreferences.getString("virus","0"));

        heartsN = Integer.parseInt(sharedPreferences.getString("heart","0"));
        bulbsN = Integer.parseInt(sharedPreferences.getString("bulb","0"));
        coinsN = Integer.parseInt(sharedPreferences.getString("coin","0"));
        virusN = Integer.parseInt(sharedPreferences.getString("virus","0"));
        starsN = Integer.parseInt(sharedPreferences.getString("star","0"));

            if(heartsN > 0)
            {
                Heart.setImageResource(R.drawable.heart);
            }
            if(bulbsN > 0)
            {
                Bulb.setImageResource(R.drawable.bulb);
            }
            if(starsN > 0)
            {
                Star.setImageResource(R.drawable.star);
            }
            if(coinsN > 0)
            {
                Coin.setImageResource(R.drawable.coin);
            }
            if(virusN > 0)
            {
                Virus.setImageResource(R.drawable.virus);
            }

        if(heartsN >0 && bulbsN >0 && starsN >0 && coinsN >0 && virusN >0)
        {
            RedeemBtn.setBackgroundDrawable(getResources().getDrawable(R.color.golden));
        }


            RedeemBtn.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View view) {

                    //Check If all items collected
                    if(heartsN >0 && bulbsN >0 && starsN >0 && coinsN >0 && virusN >0)
                    {

                        //Check if login done
                        if(Variables.sharedPreferences.getBoolean(Variables.islogin,false))
                        {
                            //Send Via whatsapp
                            PackageManager packageManager = getPackageManager();
                            Intent i = new Intent(Intent.ACTION_VIEW);

                            try {
                                String url = "https://api.whatsapp.com/send?phone=919068294705" +"&text=" + URLEncoder.encode("I have earned\n"+ heartsN +" Hearts \n" +
                                       bulbsN + " Bulbs\n" + starsN + "Stars\n" + coinsN + "Coins\n" + virusN + "Virus", "UTF-8");
                                i.setPackage("com.whatsapp");
                                i.setData(Uri.parse(url));
                                if (i.resolveActivity(packageManager) != null) {
                                    startActivity(i);
                                }
                            } catch (Exception e){
                                e.printStackTrace();
                            }
                        }
                        else
                            {
                            Toast.makeText(chest.this, "You have to login First", Toast.LENGTH_SHORT).show();
                        }



                    }
                    else

                    {
                        Toast.makeText(chest.this, "Please Collect All 5 Items First", Toast.LENGTH_SHORT).show();
                    }

                }
            });

    }
}
