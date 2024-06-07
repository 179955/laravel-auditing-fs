This driver provides the functionality to save your model audit records as lines in CSV files. It is seamlessly integrated 
with Laravel Storage System, enabling you to use any of the registered disks specified in your application as storage 
destinations for the audit files. 

Additionally, the driver offers flexibility in how the audit files are generated, allowing you to choose between creating 
a single comprehensive file or generating files for each hour of operation. Moreover, the driver can potentially improve 
performance by buffering the log records and flushing them on shutdown.

### Installation

To utilize this driver, you need to have `owen-it/laravel-auditing: ^13.0` installed. Once this requirement is met, you 
can proceed to install the driver as follows:

```
composer require 179955/laravel-auditing-fs
```

### Setup

If you wish to modify the default behavior of the driver, you must include the following configuration entries in 
`config/audit.php`. The drivers key in the configuration file should be structured as follows:

```
    ...
    'drivers' => [
        'database' => [
            'table'      => 'audits',
            'connection' => null,
        ],
        'fs' => [
            'disk'      => 'local',     // The registered name of any filesystem disk in the application
            'dir'       => 'audit',     // The directory on the disk where the audit csv files will be saved
            'filename'  => 'audit.csv', // The filename of the audit file
            'rotation'  => 'single',    // One of 'single', 'daily', or 'hourly'
        ],
    ],
    ...
```

### Usage

You can integrate the driver into any Auditable model by following the code snippet below:

```
TODO: add the code snippet
```
