package com.humtum.abhiraj.Home;


import com.adcolony.sdk.*;
import com.applovin.adview.AppLovinInterstitialAd;
import com.applovin.adview.AppLovinInterstitialAdDialog;
import com.applovin.sdk.AppLovinAd;
import com.applovin.sdk.AppLovinAdLoadListener;
import com.applovin.sdk.AppLovinAdSize;
import com.applovin.sdk.AppLovinSdk;
import android.Manifest;
import android.content.BroadcastReceiver;
import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.content.IntentFilter;
import android.content.IntentSender;
import android.content.pm.PackageManager;
import android.graphics.Bitmap;
import android.media.MediaScannerConnection;
import android.net.Uri;
import android.os.Bundle;
import androidx.annotation.Nullable;

import com.danikula.videocache.HttpProxyCacheServer;
import com.google.ads.consent.ConsentForm;
import com.google.ads.consent.ConsentFormListener;
import com.google.ads.consent.ConsentInfoUpdateListener;
import com.google.ads.consent.ConsentInformation;
import com.google.ads.consent.ConsentStatus;
import com.google.android.exoplayer2.C;
import com.google.android.exoplayer2.DefaultLoadControl;
import com.google.android.exoplayer2.LoadControl;
import com.google.android.exoplayer2.upstream.DataSpec;
import com.google.android.exoplayer2.upstream.DefaultAllocator;
import com.google.android.exoplayer2.upstream.cache.CacheUtil;
import com.google.android.exoplayer2.upstream.cache.SimpleCache;
import com.google.android.play.core.appupdate.AppUpdateInfo;
import com.google.android.play.core.appupdate.AppUpdateManager;
import com.google.android.play.core.appupdate.AppUpdateManagerFactory;
import com.google.android.play.core.install.model.AppUpdateType;
import com.google.android.play.core.install.model.UpdateAvailability;
import com.google.android.play.core.tasks.OnSuccessListener;
import com.google.android.play.core.tasks.Task;
import com.humtum.abhiraj.Accounts.Login_A;
import com.humtum.abhiraj.Services.Upload_Service;
import com.humtum.abhiraj.SimpleClasses.ApiRequest;
import com.humtum.abhiraj.SimpleClasses.Callback;
import com.humtum.abhiraj.SimpleClasses.HumTum;
import com.humtum.abhiraj.SoundLists.VideoSound_A;
import com.google.android.material.tabs.TabLayout;

import androidx.browser.customtabs.CustomTabsIntent;
import androidx.core.app.ActivityCompat;
import androidx.fragment.app.Fragment;
import androidx.fragment.app.FragmentManager;
import androidx.fragment.app.FragmentTransaction;
import androidx.swiperefreshlayout.widget.SwipeRefreshLayout;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.PagerSnapHelper;
import androidx.recyclerview.widget.RecyclerView;
import androidx.recyclerview.widget.SnapHelper;
import android.util.Log;
import android.view.GestureDetector;
import android.view.LayoutInflater;
import android.view.MotionEvent;
import android.view.View;
import android.view.ViewGroup;
import android.view.WindowManager;
import android.view.animation.Animation;
import android.view.animation.AnimationUtils;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.ProgressBar;
import android.widget.RelativeLayout;
import android.widget.TextView;
import android.widget.Toast;

import com.humtum.abhiraj.Comments.Comment_F;
import com.humtum.abhiraj.Main_Menu.MainMenuActivity;
import com.humtum.abhiraj.Main_Menu.MainMenuFragment;
import com.humtum.abhiraj.Main_Menu.RelateToFragment_OnBack.RootFragment;
import com.humtum.abhiraj.Profile.Profile_F;
import com.humtum.abhiraj.R;
import com.humtum.abhiraj.SimpleClasses.API_CallBack;
import com.humtum.abhiraj.SimpleClasses.Fragment_Callback;
import com.humtum.abhiraj.SimpleClasses.Fragment_Data_Send;
import com.humtum.abhiraj.SimpleClasses.Functions;
import com.humtum.abhiraj.SimpleClasses.Variables;
import com.humtum.abhiraj.Taged.Taged_Videos_F;
import com.humtum.abhiraj.VideoAction.VideoAction_F;
import com.downloader.Error;
import com.downloader.OnCancelListener;
import com.downloader.OnDownloadListener;
import com.downloader.OnPauseListener;
import com.downloader.OnProgressListener;
import com.downloader.OnStartOrResumeListener;
import com.downloader.PRDownloader;
import com.downloader.Progress;
import com.downloader.request.DownloadRequest;
import com.google.android.exoplayer2.ExoPlaybackException;
import com.google.android.exoplayer2.ExoPlayerFactory;
import com.google.android.exoplayer2.PlaybackParameters;
import com.google.android.exoplayer2.Player;
import com.google.android.exoplayer2.SimpleExoPlayer;
import com.google.android.exoplayer2.Timeline;
import com.google.android.exoplayer2.source.ExtractorMediaSource;
import com.google.android.exoplayer2.source.MediaSource;
import com.google.android.exoplayer2.source.TrackGroupArray;
import com.google.android.exoplayer2.trackselection.DefaultTrackSelector;
import com.google.android.exoplayer2.trackselection.TrackSelectionArray;
import com.google.android.exoplayer2.ui.PlayerView;
import com.google.android.exoplayer2.upstream.DataSource;
import com.google.android.exoplayer2.upstream.DefaultDataSourceFactory;
import com.google.android.exoplayer2.util.Util;
import com.google.android.gms.ads.AdListener;
import com.google.android.gms.ads.AdRequest;
import com.google.android.gms.ads.InterstitialAd;
import com.google.android.gms.ads.MobileAds;
import com.humtum.abhiraj.chest;
import com.humtum.abhiraj.reward_bulb;
import com.humtum.abhiraj.reward_coin;
import com.humtum.abhiraj.reward_heart;
import com.humtum.abhiraj.reward_star;
import com.humtum.abhiraj.reward_virus;
import com.volokh.danylo.hashtaghelper.HashTagHelper;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.net.MalformedURLException;
import java.net.URL;
import java.util.ArrayList;
import java.util.Random;

import okhttp3.Cache;

import static android.app.Activity.RESULT_OK;
import static android.content.ContentValues.TAG;
import static com.facebook.FacebookSdk.getApplicationContext;
import static com.google.android.play.core.install.model.AppUpdateType.IMMEDIATE;
import static com.googlecode.mp4parser.authoring.tracks.h264.SliceHeader.SliceType.B;

/**
 * A simple {@link Fragment} subclass.
 */

// this is the main view which is show all  the video in list
public class Home_F extends RootFragment implements Player.EventListener, Fragment_Data_Send,View.OnClickListener {

    ///adcolony
    private String APP_ID = "appd98ed20d447b43268c";
    private String ZONE_ID = "vz9cf39dc82e94456197";
    //Applovin
    private AppLovinAd loadedAd;

    Cache cache;
    ///Video Count for Next Preloading Video
    int currentVideoNo = 0;
    int nextVideoNo = 0;

    //REWARD SYSTEM
    final int min = 1;
    final int max = 5;
    SimpleCache simpleCache;
//Ad ids
    String Video_list[] = new String[50];
    int swipeaddcount = 0;
    int swipe_count_call_api = 0;
    int swipeheartcount  = 0;
    int swipestarcount = 0;
    int swipeviruscount = 0;
    int n = 0;
    View view;
    Context context;
    RecyclerView recyclerView;
    ArrayList<Home_Get_Set> data_list;
    int currentPage=-1;
    LinearLayoutManager layoutManager;
    ProgressBar p_bar;
    SwipeRefreshLayout swiperefresh;
    boolean is_user_stop_video=false;
    TextView following_btn,related_btn;
    String type="related";
    int swipe_count=0;
    RelativeLayout upload_video_layout;
    ImageView uploading_thumb;
    ImageView uploading_icon;
    UploadingVideoBroadCast mReceiver;
    boolean is_add_show=false;
    Home_Adapter adapter;
    // this will call when go to the home tab From other tab.
    // this is very importent when for video play and pause when the focus is changes
    boolean is_visible_to_user;
   // when we swipe for another video this will relaese the privious player
    SimpleExoPlayer privious_player;
    private int REQUEST_CODE = 11;
    private boolean heartUnlocked = false;
    private boolean starUnlocked = false;
/////////////////////////////////

    public Home_F() {
        // Required empty public constructor
    }

    public static boolean hasPermissions(Context context, String... permissions) {
        if (context != null && permissions != null) {
            for (String permission : permissions) {
                if (ActivityCompat.checkSelfPermission(context, permission) != PackageManager.PERMISSION_GRANTED) {
                    return false;
                }
            }
        }
        return true;
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
///asking user for personalised ads
//        ConsentInformation consentInformation = ConsentInformation.getInstance(context);
//        String[] publisherIds = {"pub-0123456789012345"};
//        consentInformation.requestConsentInfoUpdate(publisherIds, new ConsentInfoUpdateListener() {
//            @Override
//            public void onConsentInfoUpdated(ConsentStatus consentStatus) {
//                // User's consent status successfully updated.
//            }
//
//            @Override
//            public void onFailedToUpdateConsentInfo(String errorDescription) {
//                // User's consent status failed to update.
//            }
//        });
///Consent form for ads
//        URL privacyUrl = null;
//        try {
//            // TODO: Replace with your app's privacy policy URL.
//            privacyUrl = new URL("https://www.your.com/privacyurl");
//        } catch (
//                MalformedURLException e) {
//            e.printStackTrace();
//            // Handle error.
//        }
//        ConsentForm form = new ConsentForm.Builder(context, privacyUrl)
//                .withListener(new ConsentFormListener() {
//                    @Override
//                    public void onConsentFormLoaded() {
//                        // Consent form loaded successfully.
//                    }
//
//                    @Override
//                    public void onConsentFormOpened() {
//                        // Consent form was displayed.
//                    }
//
//                    @Override
//                    public void onConsentFormClosed(
//                            ConsentStatus consentStatus, Boolean userPrefersAdFree) {
//                        // Consent form was closed.
//                    }
//
//                    @Override
//                    public void onConsentFormError(String errorDescription) {
//                        // Consent form error.
//                    }
//                })
//                .withPersonalizedAdsOption()
//                .withNonPersonalizedAdsOption()
//                .withAdFreeOption()
//                .build();
//
//        form.load();
//
//        form.show();


        //load applovin add

////etting ads from adcolony
        AdColony.configure(getActivity(), APP_ID, ZONE_ID);

        AdColonyInterstitialListener listener = new AdColonyInterstitialListener() {
            @Override
            public void onRequestFilled(AdColonyInterstitial ad) {
                Log.d("Ads Showing", "onRequestFilled: ");
                ad.show();
            }
        };

        AdColony.requestInterstitial(ZONE_ID, listener);



        //////////FOR UPDATING THE APP
        final AppUpdateManager appUpdateManager = AppUpdateManagerFactory.create(getActivity());
        Task<AppUpdateInfo> appUpdateInfoTask = appUpdateManager.getAppUpdateInfo();

        appUpdateInfoTask.addOnSuccessListener(new OnSuccessListener<AppUpdateInfo>() {
            @Override
            public void onSuccess(AppUpdateInfo result) {

                if(result.updateAvailability() == UpdateAvailability.UPDATE_AVAILABLE && result.isUpdateTypeAllowed(AppUpdateType.FLEXIBLE))
                {
                    try {
                        appUpdateManager.startUpdateFlowForResult(result,AppUpdateType.FLEXIBLE,getActivity(),REQUEST_CODE);
                    } catch (IntentSender.SendIntentException e) {
                        e.printStackTrace();
                    }
                }
            }
        });
        ////////////////////////


        // Inflate the layout for this fragment
        view= inflater.inflate(R.layout.fragment_home, container, false);   //Attaching the home fragment to the view
        context=getContext();   //getting the context of the activity and assigning it to the context key word



        p_bar=view.findViewById(R.id.p_bar);        //get the progress bar from the HOME FRAGMENT

        /////Chrome Custom View Button
        view.findViewById(R.id.openGames).setOnClickListener(this);
        view.findViewById(R.id.opengames2).setOnClickListener(this);

        following_btn=view.findViewById(R.id.following_btn);    //get the following button from HOME FRAGMENT
        related_btn=view.findViewById(R.id.related_btn);        //get the Related button from HOME FRAGMENT

        following_btn.setOnClickListener(this);
        related_btn.setOnClickListener(this);


        recyclerView=view.findViewById(R.id.recylerview);   //will get the RecyclerView from Home fragment
        layoutManager=new LinearLayoutManager(context);     //Making new layout Manager and assigning the context to it
        recyclerView.setLayoutManager(layoutManager);   //Setting Layout Manager to the RecyclerView
        recyclerView.setHasFixedSize(false);

         SnapHelper snapHelper =  new PagerSnapHelper();        //Making the Recycler View to Swipe and View like card i.e. one swipe at a time
         snapHelper.attachToRecyclerView(recyclerView);         //Attaching snap helper to the recyclerView


        // this is the scroll listener of recycler view which will tell the current item number
        recyclerView.addOnScrollListener(new RecyclerView.OnScrollListener() {
            @Override
            public void onScrollStateChanged(RecyclerView recyclerView, int newState) {
                super.onScrollStateChanged(recyclerView, newState);

            }
            @Override
            public void onScrolled(RecyclerView recyclerView, int dx, int dy) {
                super.onScrolled(recyclerView, dx, dy);
                //here we find the current item number
                final int scrollOffset = recyclerView.computeVerticalScrollOffset();
                final int height = recyclerView.getHeight();
                int page_no=scrollOffset / height;

                if(page_no!=currentPage ){
                    currentPage=page_no;

                    Release_Privious_Player();
                    Set_Player(currentPage);

                }
            }
        });
        /// *** Applovin
        AppLovinSdk.initializeSdk(context);
        LoadAppLovinAdd();

        swiperefresh=view.findViewById(R.id.swiperefresh);              //swipe down to refresh
        swiperefresh.setProgressViewOffset(false, 0, 200);

        swiperefresh.setColorSchemeResources(R.color.black);
        swiperefresh.setOnRefreshListener(new SwipeRefreshLayout.OnRefreshListener() {
            @Override
            public void onRefresh() {
                Call_Api_For_get_Allvideos();
            }
        });

        Call_Api_For_get_Allvideos();

        if(!Variables.is_remove_ads)
        {   Load_add();}

        upload_video_layout=view.findViewById(R.id.upload_video_layout);
        uploading_thumb=view.findViewById(R.id.uploading_thumb);
        uploading_icon=view.findViewById(R.id.uploading_icon);

        mReceiver = new UploadingVideoBroadCast();
        getActivity().registerReceiver(mReceiver, new IntentFilter("uploadVideo"));

        Upload_Service mService = new Upload_Service();
        if (Functions.isMyServiceRunning(context,mService.getClass())) {
            upload_video_layout.setVisibility(View.VISIBLE);
            Bitmap bitmap=Functions.Base64_to_bitmap(Variables.sharedPreferences.getString(Variables.uploading_video_thumb,""));
            if(bitmap!=null)
            uploading_thumb.setImageBitmap(bitmap);
        }

        return view;
    }

///Load Applovin Ad
    public void LoadAppLovinAdd()
    {
        // Load an Interstitial Ad
        AppLovinSdk.getInstance( context ).getAdService().loadNextAd( AppLovinAdSize.INTERSTITIAL, new AppLovinAdLoadListener()
        {
            @Override
            public void adReceived(AppLovinAd ad)
            {
                loadedAd = ad;
            }

            @Override
            public void failedToReceiveAd(int errorCode)
            {
                // Look at AppLovinErrorCodes.java for list of error codes.
            }
        } );
    }
//Show Apploving ad
public void ShowAppLovinAdd()
{

    AppLovinInterstitialAdDialog interstitialAd = AppLovinInterstitialAd.create( AppLovinSdk.getInstance( context ), context );

    interstitialAd.showAndRender( loadedAd );
}

    /////////////////////LOADING THE AD
    InterstitialAd mInterstitialAd;

    public void Load_add() {

        // this is test app id you will get the actual id when you add app in your
        //add mob account
        MobileAds.initialize(context, getResources().getString(R.string.ad_app_id));


        //code for intertial add
        mInterstitialAd = new InterstitialAd(context);

        //here we will get the add id keep in mind above id is app id and below Id is add Id
        mInterstitialAd.setAdUnitId(context.getResources().getString(R.string.my_Interstitial_Add));
        mInterstitialAd.loadAd(new AdRequest.Builder().build());
        mInterstitialAd.setAdListener(new AdListener() {
            @Override
            public void onAdClosed() {
                mInterstitialAd.loadAd(new AdRequest.Builder().build());
            }
        });
    }

////////////SHOW AD
    public void Show_add(){
        if(mInterstitialAd!=null && mInterstitialAd.isLoaded()){
            mInterstitialAd.show();
        }
    }

    ///////////FOR UPDATING THE APP
    @Override
    public void onActivityResult(int requestCode, int resultCode, @Nullable Intent data) {
        super.onActivityResult(requestCode, resultCode, data);

        if(requestCode == REQUEST_CODE)
        {
            Toast.makeText(getActivity(), "Start Download", Toast.LENGTH_SHORT).show();

            if(resultCode != RESULT_OK)
            {
                Log.d("mmm ", "Update Flow failed " + resultCode);
            }
        }
    }

    @Override
    public void onClick(View v) {


        switch (v.getId()){

            /////Chrome Custom Tab for opening Games
            case R.id.openGames:
                if(loadedAd!=null)
                {
                    ShowAppLovinAdd();
                }
                Show_add();
// Use a CustomTabsIntent.Builder to configure CustomTabsIntent.
                String url = "https://135.win.qureka.com/";
                CustomTabsIntent.Builder builder = new CustomTabsIntent.Builder();
// set toolbar color and/or setting custom actions before invoking build()
// Once ready, call CustomTabsIntent.Builder.build() to create a CustomTabsIntent
                CustomTabsIntent customTabsIntent = builder.build();
// and launch the desired Url with CustomTabsIntent.launchUrl()
                customTabsIntent.launchUrl(getActivity(), Uri.parse(url));
                break;
            case R.id.opengames2:
                if(loadedAd!=null)
                {
                    ShowAppLovinAdd();
                }
                Show_add();
// Use a CustomTabsIntent.Builder to configure CustomTabsIntent.
                String url1 = "https://kharedobecho.com/Home/DownloadApp";
                CustomTabsIntent.Builder builder1 = new CustomTabsIntent.Builder();
// set toolbar color and/or setting custom actions before invoking build()
// Once ready, call CustomTabsIntent.Builder.build() to create a CustomTabsIntent
                CustomTabsIntent customTabsIntent1 = builder1.build();
// and launch the desired Url with CustomTabsIntent.launchUrl()
                customTabsIntent1.launchUrl(getActivity(), Uri.parse(url1));
                break;

            case R.id.following_btn:

                if(Variables.sharedPreferences.getBoolean(Variables.islogin,false)) {
                    type = "following";
                    swiperefresh.setRefreshing(true);
                    related_btn.setTextColor(context.getResources().getColor(R.color.graycolor2));
                    following_btn.setTextColor(context.getResources().getColor(R.color.white));
                    Call_Api_For_get_Allvideos();
                }
                else {
                    Open_Login();
                }
                break;

            case R.id.related_btn:
                type="related";
                swiperefresh.setRefreshing(true);
                related_btn.setTextColor(context.getResources().getColor(R.color.white));
                following_btn.setTextColor(context.getResources().getColor(R.color.graycolor2));
                Call_Api_For_get_Allvideos();

                if(loadedAd!=null)
                {
                    ShowAppLovinAdd();
                }

                break;
        }

    }

    public void Set_Adapter(){

         adapter=new Home_Adapter(context, data_list, new Home_Adapter.OnItemClickListener() {
            @Override
            public void onItemClick(int postion, final Home_Get_Set item, View view) {
                switch(view.getId()) {

                    case R.id.user_pic:
                        if(loadedAd!=null)
                        {
                            ShowAppLovinAdd();
                        }

                        onPause();
                        OpenProfile(item,false);
                        break;

                    case R.id.username:
                        if(loadedAd!=null)
                        {
                            ShowAppLovinAdd();
                        }

                        onPause();
                        OpenProfile(item,false);
                        break;

                    case R.id.like_layout:
                        if(Variables.sharedPreferences.getBoolean(Variables.islogin,false)) {
                        Like_Video(postion, item);
                        }else {
                            Toast.makeText(context, "Please Login.", Toast.LENGTH_SHORT).show();
                        }
                        break;

                    case R.id.comment_layout:

                        OpenComment(item);
                        break;

                    case R.id.shared_layout:
                        if(loadedAd!=null)
                        {
                            ShowAppLovinAdd();
                        }

                            is_add_show = false;
                            final VideoAction_F fragment = new VideoAction_F(item.video_id, new Fragment_Callback() {
                                @Override
                                public void Responce(Bundle bundle) {

                                    if (bundle.getString("action").equals("save")) {
                                        Save_Video(item);
                                    } else if (bundle.getString("action").equals("delete")) {
                                        Functions.Show_loader(context, false, false);
                                        Functions.Call_Api_For_Delete_Video(getActivity(), item.video_id, new API_CallBack() {
                                            @Override
                                            public void ArrayData(ArrayList arrayList) {

                                            }

                                            @Override
                                            public void OnSuccess(String responce) {
                                                data_list.remove(currentPage);
                                                adapter.notifyDataSetChanged();

                                            }

                                            @Override
                                            public void OnFail(String responce) {

                                            }
                                        });

                                    }

                                }
                            });

                            Bundle bundle = new Bundle();
                            bundle.putString("video_id", item.video_id);
                            bundle.putString("user_id", item.fb_id);
                            fragment.setArguments(bundle);
                            fragment.show(getChildFragmentManager(), "");

                        break;


                    case R.id.sound_image_layout:
                        if(Variables.sharedPreferences.getBoolean(Variables.islogin,false)) {
                            if(check_permissions()) {


                                Intent intent = new Intent(getActivity(), VideoSound_A.class);
                                intent.putExtra("data", item);
                                Show_add();
                                startActivity(intent);
                            }
                        }else {
                            Toast.makeText(context, "Please Login.", Toast.LENGTH_SHORT).show();
                        }

                        break;
                }

            }
        });

        adapter.setHasStableIds(true);
        recyclerView.setAdapter(adapter);


    }

    // Bottom two function will call the api and get all the videos form api and parse the json data
    private void Call_Api_For_get_Allvideos() {
        Log.i("MyToken", MainMenuActivity.token);

        JSONObject parameters = new JSONObject();
        try {
            parameters.put("fb_id", Variables.sharedPreferences.getString(Variables.u_id,"0"));
            parameters.put("token",MainMenuActivity.token);
            parameters.put("type",type);

        } catch (JSONException e) {
            Log.e("Exception", "Call_Api_For_get_Allvideos: ", e);
        }

        ApiRequest.Call_Api(context, Variables.showAllVideos, parameters, new Callback() {
            @Override
            public void Responce(String resp) {
                swiperefresh.setRefreshing(false);
                Parse_data(resp);
            }
        });



    }

    //Receive the data from Server
    public void Parse_data(String responce){


        try {
            JSONObject jsonObject=new JSONObject(responce);
            Log.d("JsonObject", "Object Details --> " + responce);
            String code=jsonObject.optString("code");
            if(code.equals("200")){
                JSONArray msgArray=jsonObject.getJSONArray("msg");

                ArrayList<Home_Get_Set> temp_list=new ArrayList();

                for (int i=0;i<msgArray.length();i++) {

                    JSONObject itemdata = msgArray.optJSONObject(i);

                    Log.d("RespFromServer item--> ","Number of item /n " + i + " value of item --> /n" + itemdata.toString());

                    Home_Get_Set item=new Home_Get_Set();

                    item.fb_id=itemdata.optString("fb_id");

                    JSONObject user_info=itemdata.optJSONObject("user_info");

                    item.username=user_info.optString("username");
                    item.first_name=user_info.optString("first_name",context.getResources().getString(R.string.app_name));
                    item.last_name=user_info.optString("last_name","User");
                    item.profile_pic=user_info.optString("profile_pic","null");
                    item.verified=user_info.optString("verified");

                    JSONObject sound_data=itemdata.optJSONObject("sound");
                    item.sound_id=sound_data.optString("id");
                    item.sound_name=sound_data.optString("sound_name");
                    item.sound_pic=sound_data.optString("thum");
                    if(sound_data!=null) {
                        JSONObject audio_path = sound_data.optJSONObject("audio_path");
                        item.sound_url_mp3 = audio_path.optString("mp3");
                        item.sound_url_acc = audio_path.optString("acc");
                    }



                    JSONObject count=itemdata.optJSONObject("count");

                    item.like_count=count.optString("like_count");
                    item.video_comment_count=count.optString("video_comment_count");

                    item.privacy_type=itemdata.optString("privacy_type");
                    item.allow_comments=itemdata.optString("allow_comments");
                    item.video_id=itemdata.optString("id");
                    item.liked=itemdata.optString("liked");
                    item.video_url=itemdata.optString("video");

                    Log.d("RespFromServer", "url of " +  i + "is -->" + item.video_url);

                    Video_list[i] = itemdata.optString("video");

                    Log.d("RespFromServer", "Video_list_url" + i + "url -->" + Video_list[i]);

                    item.video_description=itemdata.optString("description");

                    item.thum=itemdata.optString("thum");
                    item.created_date=itemdata.optString("created");

                    temp_list.add(item);    ///Add all the items to the list
                    ////Cal current video playing
                    currentVideoNo = i;
                }

                if(!temp_list.isEmpty()) {
                    currentPage=-1;
                    data_list=new ArrayList<>();
                    data_list.addAll(temp_list);
                    Set_Adapter();
                }

                else if(type.equalsIgnoreCase("related")) {
                    type = "following";
                    related_btn.setTextColor(context.getResources().getColor(R.color.graycolor2));
                    following_btn.setTextColor(context.getResources().getColor(R.color.white));
                }

                else if(type.equalsIgnoreCase("following")){
                    Toast.makeText(context, "Follow an account to see there videos here.", Toast.LENGTH_SHORT).show();
                    type="related";
                    related_btn.setTextColor(context.getResources().getColor(R.color.white));
                    following_btn.setTextColor(context.getResources().getColor(R.color.graycolor2));
                }

            }else {
                Toast.makeText(context, ""+jsonObject.optString("msg"), Toast.LENGTH_SHORT).show();
            }

        } catch (JSONException e) {
            e.printStackTrace();
        }

    }

    private void Call_Api_For_Singlevideos(final int postion) {


             JSONObject parameters = new JSONObject();
        try {
            parameters.put("fb_id", Variables.sharedPreferences.getString(Variables.u_id,"0"));
            parameters.put("token",Variables.sharedPreferences.getString(Variables.device_token,"Null"));
            parameters.put("video_id",data_list.get(postion).video_id);

        } catch (JSONException e) {
            e.printStackTrace();
        }


        ApiRequest.Call_Api(context, Variables.showAllVideos, parameters, new Callback() {
            @Override
            public void Responce(String resp) {
                swiperefresh.setRefreshing(false);
                Singal_Video_Parse_data(postion,resp);
            }
        });


    }

    public void Singal_Video_Parse_data(int pos,String responce){

        try {
            JSONObject jsonObject=new JSONObject(responce);
            String code=jsonObject.optString("code");
            if(code.equals("200")){
                JSONArray msgArray=jsonObject.getJSONArray("msg");
                for (int i=0;i<msgArray.length();i++) {
                    JSONObject itemdata = msgArray.optJSONObject(i);
                    Home_Get_Set item=new Home_Get_Set();
                    item.fb_id=itemdata.optString("fb_id");

                    JSONObject user_info=itemdata.optJSONObject("user_info");

                    item.username=user_info.optString("username");
                    item.first_name=user_info.optString("first_name",context.getResources().getString(R.string.app_name));
                    item.last_name=user_info.optString("last_name","User");
                    item.profile_pic=user_info.optString("profile_pic","null");
                    item.verified=user_info.optString("verified");

                    JSONObject sound_data=itemdata.optJSONObject("sound");
                    item.sound_id=sound_data.optString("id");
                    item.sound_name=sound_data.optString("sound_name");
                    item.sound_pic=sound_data.optString("thum");
                    if(sound_data!=null) {
                        JSONObject audio_path = sound_data.optJSONObject("audio_path");
                        item.sound_url_mp3 = audio_path.optString("mp3");
                        item.sound_url_acc = audio_path.optString("acc");
                    }


                    JSONObject count=itemdata.optJSONObject("count");
                    item.like_count=count.optString("like_count");
                    item.video_comment_count=count.optString("video_comment_count");


                    item.privacy_type=itemdata.optString("privacy_type");
                    item.allow_comments=itemdata.optString("allow_comments");
                     item.video_id=itemdata.optString("id");
                    item.liked=itemdata.optString("liked");
                    item.video_url=itemdata.optString("video");
                    item.video_description=itemdata.optString("description");

                    item.thum=itemdata.optString("thum");
                    item.created_date=itemdata.optString("created");

                    data_list.remove(pos);
                    data_list.add(pos,item);
                    adapter.notifyDataSetChanged();
                }



            }else {
                Toast.makeText(context, ""+jsonObject.optString("msg"), Toast.LENGTH_SHORT).show();
            }

        } catch (JSONException e) {

            e.printStackTrace();
        }

    }

    public static class CachingCounters {
        /**
         * The number of bytes already in the cache.
         */
        public volatile long alreadyCachedBytes;
        /**
         * The number of newly cached bytes.
         */
        public volatile long newlyCachedBytes;
        /**
         * The length of the content being cached in bytes, or {@link C#LENGTH_UNSET} if unknown.
         */
        public volatile long contentLength = C.LENGTH_UNSET;

        /**
         * Returns the sum of {@link #alreadyCachedBytes} and {@link #newlyCachedBytes}.
         */

        public long totalCachedBytes() {
            return alreadyCachedBytes + newlyCachedBytes;
        }
    }

    // this will call when swipe for another video and
    // this function will set the player to the current video
    public void Set_Player(final int currentPage){


          final Home_Get_Set item= data_list.get(currentPage);

      //     Call_cache();
        Log.d(TAG, "Proxy");

          HttpProxyCacheServer proxy = HumTum.getProxy(context);
           String proxyUrl = proxy.getProxyUrl(item.video_url);

           LoadControl loadControl = new DefaultLoadControl.Builder()
                   .setAllocator(new DefaultAllocator(true, 16))
                   .setBufferDurationsMs(1*1024, 1*1024, 500, 1024)
                   .setTargetBufferBytes(-1)
                   .setPrioritizeTimeOverSizeThresholds(true)
                    .createDefaultLoadControl();

           DefaultTrackSelector trackSelector = new DefaultTrackSelector();
           final SimpleExoPlayer player = ExoPlayerFactory.newSimpleInstance(context, trackSelector,loadControl);

            DataSource.Factory dataSourceFactory = new DefaultDataSourceFactory(context,
                    Util.getUserAgent(context, context.getResources().getString(R.string.app_name)));

        MediaSource videoSource = new ExtractorMediaSource.Factory(dataSourceFactory)
                .createMediaSource(Uri.parse(item.video_url));

        /////Load the next video
        //Dowwnload tthe 500kb for the next file


            /*MediaSource videoSource = new ExtractorMediaSource.Factory(dataSourceFactory)
                .createMediaSource(Uri.parse(proxyUrl));


            Log.d(Variables.tag,proxyUrl);*/
            Log.d("Proxy url","Proxy Url " + proxyUrl);
            Log.d("Proxy url","Video Url " + item.video_url);

             player.prepare(videoSource);

             player.setRepeatMode(Player.REPEAT_MODE_ALL);
             player.addListener(this);


         View layout=layoutManager.findViewByPosition(currentPage);
         final PlayerView playerView=layout.findViewById(R.id.playerview);
         playerView.setPlayer(player);


        player.setPlayWhenReady(is_visible_to_user);

        privious_player=player;




        final RelativeLayout mainlayout = layout.findViewById(R.id.mainlayout);
        playerView.setOnTouchListener(new View.OnTouchListener() {
            private GestureDetector gestureDetector = new GestureDetector(context, new GestureDetector.SimpleOnGestureListener() {

                @Override
                public boolean onFling(MotionEvent e1, MotionEvent e2, float velocityX, float velocityY) {
                     super.onFling(e1, e2, velocityX, velocityY);
                    float deltaX = e1.getX() - e2.getX();
                    float deltaXAbs = Math.abs(deltaX);
                    // Only when swipe distance between minimal and maximal distance value then we treat it as effective swipe
                    if((deltaXAbs > 100) && (deltaXAbs < 1000)) {
                        if(deltaX > 0)
                        {
                            OpenProfile(item,true);
                        }
                    }


                    return true;
                }

                @Override
                public boolean onSingleTapUp(MotionEvent e) {
                    super.onSingleTapUp(e);
                    if(!player.getPlayWhenReady()){
                        is_user_stop_video=false;
                        privious_player.setPlayWhenReady(true);
                    }else{
                        is_user_stop_video=true;
                        privious_player.setPlayWhenReady(false);
                    }


                    return true;
                }

                @Override
                public void onLongPress(MotionEvent e) {
                    super.onLongPress(e);
                    Show_video_option(item);

                }

                @Override
                public boolean onDoubleTap(MotionEvent e) {

                    if(!player.getPlayWhenReady()){
                        is_user_stop_video=false;
                        privious_player.setPlayWhenReady(true);
                    }


                    if(Variables.sharedPreferences.getBoolean(Variables.islogin,false)) {
                        Show_heart_on_DoubleTap(item, mainlayout, e);
                        Like_Video(currentPage, item);
                    }else {
                        Toast.makeText(context, "Please Login into app", Toast.LENGTH_SHORT).show();
                    }
                    return super.onDoubleTap(e);

                }
            });

            @Override
            public boolean onTouch(View v, MotionEvent event) {
                gestureDetector.onTouchEvent(event);
                return true;
            }
        });

        TextView desc_txt=layout.findViewById(R.id.desc_txt);
        HashTagHelper.Creator.create(context.getResources().getColor(R.color.maincolor), new HashTagHelper.OnHashTagClickListener() {
            @Override
            public void onHashTagClicked(String hashTag) {

                onPause();
                OpenHashtag(hashTag);

            }
        }).handle(desc_txt);



        LinearLayout soundimage = (LinearLayout)layout.findViewById(R.id.sound_image_layout);
        Animation sound_animation = AnimationUtils.loadAnimation(context,R.anim.d_clockwise_rotation);
        soundimage.startAnimation(sound_animation);

        if(Variables.sharedPreferences.getBoolean(Variables.islogin,false))
        Functions.Call_Api_For_update_view(getActivity(),item.video_id);



        swipe_count++;
        swipe_count_call_api++;
        Log.d("RespFromServer", "Swipe Count --->" + swipe_count_call_api);
        if(swipe_count_call_api > 48 )
        {
            Call_Api_For_get_Allvideos();
            swipe_count_call_api = 0;
        }
        // swipeviruscount++;
       // swipeheartcount++;
       // swipestarcount++;
        //code for virus activity to show
      /*  if(swipeviruscount >= 5203) {

            Intent intent = new Intent(getActivity(), reward_virus.class);
            startActivity(intent);
            swipeviruscount = 0;

        }*/

        //code for star activity to UNLOCK
      /*  if(swipestarcount >= 1803) {
            starUnlocked = true;
            Intent intent = new Intent(getActivity(), reward_star.class);
            startActivity(intent);
            swipestarcount = 0;
        }
*/
        //code for heart activity to show
   /*     if(swipeheartcount >= 693) {
            heartUnlocked = true;
            Intent intent = new Intent(getActivity(), reward_heart.class);
            startActivity(intent);
            swipeheartcount = 0;
        }
*/



        if (swipe_count > 10) {
            swipeaddcount++;

/*
            //REWARD SYSTEM START
            if (swipeaddcount >= 3) {
                final int random = new Random().nextInt((max - min))+min;
                n = random;

                if(n == 1 && heartUnlocked == true)  //  heart
                {
                    Intent intent = new Intent(getActivity(), reward_heart.class);
                    startActivity(intent);
                    Show_add();
                }
                else if(n == 2)
                {
                    Intent intent = new Intent(getActivity(), reward_bulb.class);
                    startActivity(intent);
                    Show_add();
                }
                else if(n == 3)
                {
                    Intent intent = new Intent(getActivity(), reward_coin.class);
                    startActivity(intent);
                    Show_add();
                }
                else if(n == 4 && starUnlocked == true)
                {
                    Intent intent = new Intent(getActivity(), reward_star.class);
                    startActivity(intent);
                    Show_add();
                }

                swipeaddcount = 0;
            }
            swipe_count = 0;
*/
        }




        Call_Api_For_Singlevideos(currentPage);

    }

   public void Call_cache(){
        if(currentPage+1<data_list.size()){
            HttpProxyCacheServer proxy = HumTum.getProxy(context);
            proxy.getProxyUrl(data_list.get(currentPage+1).video_url);

        }
    }

    public void Show_heart_on_DoubleTap(Home_Get_Set item,final RelativeLayout mainlayout,MotionEvent e){

        int x = (int) e.getX()-100;
        int y = (int) e.getY()-100;
        RelativeLayout.LayoutParams lp = new RelativeLayout.LayoutParams(
                RelativeLayout.LayoutParams.WRAP_CONTENT,
                RelativeLayout.LayoutParams.WRAP_CONTENT);
        final ImageView iv = new ImageView(getApplicationContext());
        lp.setMargins(x, y, 0, 0);
        iv.setLayoutParams(lp);
        if(item.liked.equals("1"))
        iv.setImageDrawable(getResources().getDrawable(
                R.drawable.ic_like));
        else
            iv.setImageDrawable(getResources().getDrawable(
                    R.drawable.ic_like_fill));

        mainlayout.addView(iv);
        Animation fadeoutani = AnimationUtils.loadAnimation(context,R.anim.fade_out);

        fadeoutani.setAnimationListener(new Animation.AnimationListener() {
            @Override
            public void onAnimationStart(Animation animation) {

            }

            @Override
            public void onAnimationEnd(Animation animation) {
                mainlayout.removeView(iv);
            }

            @Override
            public void onAnimationRepeat(Animation animation) {

            }
        });
        iv.startAnimation(fadeoutani);

    }

    @Override
    public void onDataSent(String yourData) {
        int comment_count =Integer.parseInt(yourData);
        Home_Get_Set item=data_list.get(currentPage);
        item.video_comment_count=""+comment_count;
        data_list.remove(currentPage);
        data_list.add(currentPage,item);
        adapter.notifyDataSetChanged();
    }

    @Override
    public void setUserVisibleHint(boolean isVisibleToUser) {
        super.setUserVisibleHint(isVisibleToUser);
        is_visible_to_user=isVisibleToUser;

        if(privious_player!=null && (isVisibleToUser && !is_user_stop_video)){
            privious_player.setPlayWhenReady(true);
        }else if(privious_player!=null && !isVisibleToUser){
            privious_player.setPlayWhenReady(false);
        }
    }

    public void Release_Privious_Player(){
        if(privious_player!=null) {
            privious_player.removeListener(this);
            privious_player.release();
        }
    }




    // this function will call for like the video and Call an Api for like the video
    public void Like_Video(final int position, final Home_Get_Set home_get_set){
        String action=home_get_set.liked;

        if(action.equals("1")){
            action="0";
            home_get_set.like_count=""+(Integer.parseInt(home_get_set.like_count) -1);
        }else {
            action="1";
            home_get_set.like_count=""+(Integer.parseInt(home_get_set.like_count) +1);
        }


        data_list.remove(position);
        home_get_set.liked=action;
        data_list.add(position,home_get_set);
        adapter.notifyDataSetChanged();

        Functions.Call_Api_For_like_video(getActivity(), home_get_set.video_id, action,new API_CallBack() {

            @Override
            public void ArrayData(ArrayList arrayList) {

            }

            @Override
            public void OnSuccess(String responce) {

            }

            @Override
            public void OnFail(String responce) {

            }
        });

    }



    // this will open the comment screen
    private void OpenComment(Home_Get_Set item) {

        int comment_counnt=Integer.parseInt(item.video_comment_count);

        Fragment_Data_Send fragment_data_send=this;

        Comment_F comment_f = new Comment_F(comment_counnt,fragment_data_send);
        FragmentTransaction transaction = getActivity().getSupportFragmentManager().beginTransaction();
        transaction.setCustomAnimations(R.anim.in_from_bottom, R.anim.out_to_top, R.anim.in_from_top, R.anim.out_from_bottom);
        Bundle args = new Bundle();
        args.putString("video_id",item.video_id);
        args.putString("user_id",item.fb_id);
        comment_f.setArguments(args);
        transaction.addToBackStack(null);
        transaction.replace(R.id.MainMenuFragment, comment_f).commit();


    }


    public void Open_Login(){

        Intent intent = new Intent(getActivity(), Login_A.class);
        Show_add();
        startActivity(intent);
        getActivity().overridePendingTransition(R.anim.in_from_bottom, R.anim.out_to_top);
    }

    // this will open the profile of user which have uploaded the currenlty running video
    private void OpenProfile(Home_Get_Set item,boolean from_right_to_left) {
        if(Variables.sharedPreferences.getString(Variables.u_id,"0").equals(item.fb_id)){

            TabLayout.Tab profile= MainMenuFragment.tabLayout.getTabAt(4);
            profile.select();

        }else {
            Profile_F profile_f = new Profile_F(new Fragment_Callback() {
                @Override
                public void Responce(Bundle bundle) {

                    Call_Api_For_Singlevideos(currentPage);
                }
            });
            FragmentTransaction transaction = getActivity().getSupportFragmentManager().beginTransaction();
            if(from_right_to_left)
            transaction.setCustomAnimations(R.anim.in_from_right, R.anim.out_to_left, R.anim.in_from_left, R.anim.out_to_right);
            else
                transaction.setCustomAnimations(R.anim.in_from_bottom, R.anim.out_to_top, R.anim.in_from_top, R.anim.out_from_bottom);

            Bundle args = new Bundle();
            args.putString("user_id", item.fb_id);
            args.putString("user_name",item.first_name+" "+item.last_name);
            args.putString("user_pic",item.profile_pic);
            profile_f.setArguments(args);
            transaction.addToBackStack(null);
            transaction.replace(R.id.MainMenuFragment, profile_f).commit();
        }

    }


    // this will open the profile of user which have uploaded the currenlty running video
    private void OpenHashtag(String tag) {

            Taged_Videos_F taged_videos_f = new Taged_Videos_F();
            FragmentTransaction transaction = getActivity().getSupportFragmentManager().beginTransaction();
            transaction.setCustomAnimations(R.anim.in_from_bottom, R.anim.out_to_top, R.anim.in_from_top, R.anim.out_from_bottom);
            Bundle args = new Bundle();
            args.putString("tag", tag);
            taged_videos_f.setArguments(args);
            transaction.addToBackStack(null);
            transaction.replace(R.id.MainMenuFragment, taged_videos_f).commit();


    }



    private void Show_video_option(final Home_Get_Set home_get_set) {

        final CharSequence[] options = { "Save Video","Cancel" };

        androidx.appcompat.app.AlertDialog.Builder builder = new androidx.appcompat.app.AlertDialog.Builder(context,R.style.AlertDialogCustom);

        builder.setTitle(null);

        builder.setItems(options, new DialogInterface.OnClickListener() {

            @Override

            public void onClick(DialogInterface dialog, int item) {

                if (options[item].equals("Save Video"))

                {
                    if(Functions.Checkstoragepermision(getActivity()))
                    Save_Video(home_get_set);

                }


                else if (options[item].equals("Cancel")) {

                    dialog.dismiss();

                }

            }

        });

        builder.show();

    }




    public void Save_Video(final Home_Get_Set item){

        JSONObject params=new JSONObject();
        try {
            params.put("video_id",item.video_id);
        } catch (JSONException e) {
            e.printStackTrace();
        }

        Functions.Show_loader(context,false,false);
        ApiRequest.Call_Api(context, Variables.downloadFile, params, new Callback() {
            @Override
            public void Responce(String resp) {
                Functions.cancel_loader();
                try {
                    JSONObject responce=new JSONObject(resp);
                    String code=responce.optString("code");
                    if(code.equals("200")){
                        JSONArray msg=responce.optJSONArray("msg");
                        JSONObject jsonObject=msg.optJSONObject(0);
                        String download_url=jsonObject.getString("download_url");

                        if(download_url!=null){

                            Functions.Show_determinent_loader(context,false,false);
                            PRDownloader.initialize(getActivity().getApplicationContext());
                            DownloadRequest prDownloader= PRDownloader.download(download_url, Variables.app_showing_folder, item.video_id+".mp4")
                                    .build()
                                    .setOnStartOrResumeListener(new OnStartOrResumeListener() {
                                        @Override
                                        public void onStartOrResume() {

                                        }
                                    })
                                    .setOnPauseListener(new OnPauseListener() {
                                        @Override
                                        public void onPause() {

                                        }
                                    })
                                    .setOnCancelListener(new OnCancelListener() {
                                        @Override
                                        public void onCancel() {

                                        }
                                    })
                                    .setOnProgressListener(new OnProgressListener() {
                                        @Override
                                        public void onProgress(Progress progress) {

                                            int prog=(int)((progress.currentBytes*100)/progress.totalBytes);
                                            Functions.Show_loading_progress(prog);

                                        }
                                    });


                            prDownloader.start(new OnDownloadListener() {
                                @Override
                                public void onDownloadComplete() {
                                    Functions.cancel_determinent_loader();
                                    Scan_file(item);
                                }

                                @Override
                                public void onError(Error error) {

                                    Toast.makeText(context, "Error", Toast.LENGTH_SHORT).show();
                                    Functions.cancel_determinent_loader();
                                }


                            });

                        }
                    }

                } catch (JSONException e) {
                    e.printStackTrace();
                }


            }
        });






    }



    public void Scan_file(Home_Get_Set item){
        MediaScannerConnection.scanFile(getActivity(),
                new String[] { Variables.app_showing_folder +item.video_id+".mp4" },
                null,
                new MediaScannerConnection.OnScanCompletedListener() {

                    public void onScanCompleted(String path, Uri uri) {

                        Log.i("ExternalStorage", "Scanned " + path + ":");
                        Log.i("ExternalStorage", "-> uri=" + uri);
                    }
                });
    }



    public boolean is_fragment_exits(){
        FragmentManager fm = getActivity().getSupportFragmentManager();
        if(fm.getBackStackEntryCount()==0){
            return false;
        }else {
            return true;
        }

    }

    // this is lifecyle of the Activity which is importent for play,pause video or relaese the player
    @Override
    public void onResume() {
        super.onResume();
        if((privious_player!=null && (is_visible_to_user && !is_user_stop_video)) && !is_fragment_exits() ){
            privious_player.setPlayWhenReady(true);
        }
    }


    @Override
    public void onPause() {
        super.onPause();
        if(privious_player!=null){
            privious_player.setPlayWhenReady(false);
        }
    }


    @Override
    public void onStop() {
        super.onStop();
        if(privious_player!=null){
            privious_player.setPlayWhenReady(false);
        }
    }


    @Override
    public void onDestroy() {
        super.onDestroy();
        if(privious_player!=null){
            privious_player.release();
        }

        if(mReceiver!=null) {
            getActivity().unregisterReceiver(mReceiver);
            mReceiver = null;
        }

    }



    public boolean check_permissions() {

        String[] PERMISSIONS = {
                Manifest.permission.READ_EXTERNAL_STORAGE,
                android.Manifest.permission.WRITE_EXTERNAL_STORAGE,
                Manifest.permission.RECORD_AUDIO,
                Manifest.permission.CAMERA
        };

        if (!hasPermissions(context, PERMISSIONS)) {
            requestPermissions(PERMISSIONS, 2);
        }else {

            return true;
        }

        return false;
    }

    // Bottom all the function and the Call back listener of the Expo player
    @Override
    public void onTimelineChanged(Timeline timeline, @Nullable Object manifest, int reason) {

    }

    @Override
    public void onTracksChanged(TrackGroupArray trackGroups, TrackSelectionArray trackSelections) {

    }

    @Override
    public void onLoadingChanged(boolean isLoading) {

    }

    @Override
    public void onPlayerStateChanged(boolean playWhenReady, int playbackState) {

        if(playbackState==Player.STATE_BUFFERING){
            p_bar.setVisibility(View.VISIBLE);
        }
        else if(playbackState==Player.STATE_READY){
             p_bar.setVisibility(View.GONE);
        }


    }

    @Override
    public void onRepeatModeChanged(int repeatMode) {

    }

    @Override
    public void onShuffleModeEnabledChanged(boolean shuffleModeEnabled) {

    }

    @Override
    public void onPlayerError(ExoPlaybackException error) {

    }

    @Override
    public void onPositionDiscontinuity(int reason) {

    }

    @Override
    public void onPlaybackParametersChanged(PlaybackParameters playbackParameters) {

    }

    @Override
    public void onSeekProcessed() {

    }

    private class UploadingVideoBroadCast extends BroadcastReceiver {

        @Override
        public void onReceive(Context context, Intent intent) {

            Upload_Service mService = new Upload_Service();
            if (Functions.isMyServiceRunning(context,mService.getClass())) {
                upload_video_layout.setVisibility(View.VISIBLE);
                Bitmap bitmap=Functions.Base64_to_bitmap(Variables.sharedPreferences.getString(Variables.uploading_video_thumb,""));
                if(bitmap!=null)
                uploading_thumb.setImageBitmap(bitmap);

            }
            else {
                upload_video_layout.setVisibility(View.GONE);
            }

        }
    }




}
