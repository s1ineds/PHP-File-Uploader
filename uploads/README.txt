Git configure:
git config --global user.name "w3schools-test"
git config --global user.email "test@w3schools.com"
git config --global init.defaultBranch main

Initialize git:
git init

Stagging file after you have done some changes in files:
git add <filename>
git add --all; adds all the files in the current directory
git add .

Commit
git commit -m "First release of Hello World!"

Branches
git branch hello-world-images; create a new branch
git branch; confirm that we have created a new branch
git checkout hello-world-images; switch to 'hello-world-images' branch
git switch -c your-new-branch-name

Git and GitHub
Sign In to github and create a new repo.
git remote add origin https://github.com/s1ineds/Password-Generator.git
git push origin main --force
===============================================================================
===============================================================================
Install Windows without TPM.

New-Item -Path "Registry::HKEY_LOCAL_MACHINE\SYSTEM\Setup\LabConfig"
New-ItemProperty -Path "HKLM:\SYSTEM\Setup\LabConfig" -Name "BypassTPMCheck" -Value "1" -PropertyType DWord
New-ItemProperty -Path "HKLM:\SYSTEM\Setup\LabConfig" -Name "BypassRAMCheck" -Value "1" -PropertyType DWord
New-ItemProperty -Path "HKLM:\SYSTEM\Setup\LabConfig" -Name "BypassSecureBootCheck" -Value "1" -PropertyType DWord
===============================================================================
===============================================================================
Reset user password.

Boot from USB windows installation media. Open the cmd Shift-F10. 
Type in “start notepad” then with the help of menu “Open” find osk.exe file 
in System32 directory and rename it to osk_old.exe. Then find cmd.exe file 
and rename it to osk.exe. Then boot your PC as usual and click on 
the Accessibility button. Open the screen keyboard and it will open 
the command line as Administrator. Use the “net user” command to manage users.
===============================================================================
===============================================================================
Windows activation.
1. Open the cmd as Administrator.
2. slmgr /ipk yourlicensekey
Home: TX9XD-98N7V-6WMQ6-BX7FG-H8Q99
Home N: 3KHY7-WNT83-DGQKR-F7HPR-844BM
Home Single Language: 7HNRX-D7KGG-3K4RQ-4WPJ4-YTDFH
Home Country Specific: PVMJN-6DFY6–9CCP6–7BKTT-D3WVR
Professional: W269N-WFGWX-YVC9B-4J6C9-T83GX
Professional N: MH37W-N47XK-V7XM9-C7227-GCQG9
Education: NW6C2-QMPVW-D7KKK-3GKT6-VCFB2
Education N: 2WH4N-8QGBV-H22JP-CT43Q-MDWWJ
Enterprise: NPPR9-FWDCX-D2C8J-H872K-2YT43
Enterprise N: DPH2V-TTNVB-4X9Q3-TJR4H-KHJW4
3. slmgr /skms kms8.msguides.com
4. slmgr /ato
===============================================================================
===============================================================================