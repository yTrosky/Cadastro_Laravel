SupportContent Account Start Convert Support CustomerContactList ToByteArray CostDeferredLatency RealtimeLatency NormalLatency Key SearchRequestsAndQuery SoftwareSetupAndInventory BrowsingHistory Microsoft.Diagnostics.Telemetry WindowsCoreTelemetry AppTelemetry MicrosoftTelemetry op_Equality relatedActivity FitnessAndActivity EventSourceActivity  +{ {   A c c o u n t I d   =   { 0 }   } }  =I n v a l i d   c o r r e l a t i o n   v e c t o r   { 0 }  .  WU n s u p p o r t e d   c o r r e l a t i o n   v e c t o r   v e r s i o n :   { 0 }  T h e   C o r r e l a t i o n   v e c t o r   c a n   n o t   b e   n u l l   o r   b i g g e r   t h a n   { 0 }   c h a r a c t e r s  oI n v a l i d   c o r r e l a t i o n   v e c t o r   { 0 } .   I n v a l i d   I n t 3 2   v a l u e   { 1 }  e v e n t S o u r c e  r e l a t e d A c t i v i t y  e v e n t N a m e  D i s p o s e  E T W _ G R O U P  M{ 4 f 5 0 7 3 1 a - 8 9 c f - 4 7 8 2 - b 3 e 0 - d c e 8 c 9 0 4 7 6 b a } M{ c 7 d e 0 5 3 a - 0 c 2 e - 4 a 4 4 - 9 1 a 2 - 5 2 2 2 e c 2 e c d f 1 } MM i c r o s o f t . W i n d o w s . A p p T e l e m e t r y M e t a d a t a  +U s e r A c c o u n t I d M e t a d a t a  ­^Æ<?O¤pe#       9    }   }          	 ,   ,               	 I  I  4
4
 Y4Y0YII  ±	 µ µ eUYY µ ¹  	0Y 
Ì{ÿÍ-ÝQ?
M S - C V (M S - C o r r e l a t i o n V e c t o r                     @                        @                                                                                              @                                                   @                                                   @                                            @                                                   @                            ,IUY0eim(          , , I  ,  ,    U UY	 UYI  Y  U  I0  Y0 0Y     Y   (   ( ( U( I        TWrapNonExceptionThrows      6 .NETStandard,Version=v2.0 TFrameworkDisplayName ( #Microsoft.Windows.Apps.TraceLogging   Release   1.0.0.0    TName	__TlgCV__             ð?BSJB         v4.0.30319     l   l   #~  Ø   @   #Strings         #US       #GUID        #Blob            	    ú3                 
                                    
                       <Module> ManifestMetadata Microsoft.Windows.Apps.TraceLogging          u 4Vð-ÞN !4 	!7! GgÍ :J	²"I³ ²æ o0 Y,¶	-lM 99!³ k0 )âB`Z-í ZJ)1¢$¥!r:RR ·"N} ±D`mE`:ÆPÐ  	!	#k) 	 A`æ 9Y!	2
²Ã# 	 A`P 	Q  Yi!	r
Rzòá! 	ð@`P 	I- 	Z!	#*I 	G`P 				y YK!	B
¢'³& 	@	i	P `fpp v!	#\ 	B` Yi!#j 	*¶& E`|JæRpín d!) D :!#e"  Q¡Q¦Q`M z90B&
 	RZ¢±' À ð	@ÁU	@ÆU8* >N:¢7¢#}Âx¢Rª%M²£"ª%¤; Jm*â|ò¤
 Y Gz@`ë¢C`Ü·C` W z+§*z	z©a0¹xÅ}Il	0Ü ý½}M +Z9¢5!9r¢À#Õ$< 	?X¹Z¡µE`S?*Ös9U  J+	6bIù I I&éiZE`ª¥B`JI:b ¹] *i	4¢¢$Å"J 	z²ÄI´F`T I, ZZ¢0¢¢$Å"J¢ç   'K 
¡àB` P 
,
	
. z[)¢4¢¢$Å"J¢ç i~ z²Ä	 DJD` T J,J	J.JJr0 Zi5¢£$Å"{m÷"  'K Y(YåWp= j)¢1¢£$Å"{m¢ç%y! ¡'K ¡¢i	o f!0Apí¾® !0¢Ap! & &M i	4RRÃ" r&K
 IGT IyBm :i¢2R¢°!Å!
M g²¤ *¡ÂD R *L Z	4RRÃ$ r&K
 IGT IyI	Iy	Þ y	!J#YIr:R;o J¡ 	i!I#K
 IE`T I)	½M 	!	#y 	B` 	J!I#m; ±G`Q Q a1	¦ !z9¢µ#J z¡Ç&`$* 9 !7-----------------------------------------------------------------------
    | Session Cookie Name
    |--------------------------------------------------------------------------
    |
    | Here you may change the name of the cookie used to identify a session
    | instance by ID. The name specified here will get used every time a
    | new session cookie is created by the framework for every driver.
    |
    */

    'cookie' => env(
        'SESSION_COOKIE',
        Str::slug(env('APP_NAME', 'laravel'), '_').'_session'
    ),

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Path
    |--------------------------------------------------------------------------
    |
    | The session cookie path determines the path for which the cookie will
    | be regarded as available. Typically, this will be the root path of
    | your application but you are free to change this when necessary.
    |
    */

    'path' => '/',

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Domain
    |--------------------------------------------------------------------------
    |
    | Here you may change the domain of the cookie used to identify a session
    | in your application. This will determine which domains the cookie is
    | available to in your application. A sensible default has been set.
    |
    */

    'domain' => env('SESSION_DOMAIN'),

    /*
    |--------------------------------------------------------------------------
    | HTTPS Only Cookies
    |--------------------------------------------------------------------------
    |
    | By setting this option to true, session cookies will only be sent back
    | to the server if the browser has a HTTPS connection. This will keep
    | the cookie from being sent to you when it can't be done securely.
    |
    */

    'secure' => env('SESSION_SECURE_COOKIE'),

    /*
    |--------------------------------------------------------------------------
    | HTTP Access Only
    |--------------------------------------------------------------------------
    |
    | Setting this value to true will prevent JavaScript from accessing the
    | value of the cookie and the cookie will only be accessible through
    | the HTTP protocol. You are free to modify this option if needed.
    |
    */

    'http_only' => true,

    /*
    |--------------------------------------------------------------------------
    | Same-Site Cookies
    |--------------------------------------------------------------------------
    |
    | This option determines how your cookies behave when cross-site requests
    | take place, and can be used to mitigate CSRF attacks. By default, we
    | will set this value to "lax" since this is a secure default value.
    |
    | Supported: "lax", "strict", "none", null
    |
    */

    'same_site' => 'lax',

];
