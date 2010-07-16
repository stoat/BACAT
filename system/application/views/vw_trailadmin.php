<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title id='title'>HTML Page setup Tutorial</title>
        <!-- ** CSS ** -->
        <!-- base library -->
        <link rel="stylesheet" type="text/css" href="../assets/ext-3.2.1/resources/css/ext-all.css" />
        <!-- overrides to base library -->
        <!-- ** Javascript ** -->
        <!-- ExtJS library: base/adapter -->
        <script type="text/javascript" src="../assets/ext-3.2.1/adapter/ext/ext-base.js"></script>
        <!-- ExtJS library: all widgets -->
        <script type="text/javascript" src="../assets/ext-3.2.1/ext-all-debug.js"></script>

        <!-- overrides to library -->

        <!-- extensions -->

        <!-- page specific -->
 
        <script type="text/javascript">
        // Path to the blank image should point to a valid location on your server
        Ext.BLANK_IMAGE_URL = '../assets/ext-3.2.1/resources/images/default/s.gif';

    var vp;
    var elCenter;
        		elCenter = new Ext.Panel({
			id: 'elCenter',
			region: 'center',
			title: 'Dashboard',
			layout: 'fit',
			autoScroll: true
		});



    Ext.onReady(function(){
    Ext.QuickTips.init();

 
           console.info('woohoo!!!');
   MyPanelUi = Ext.extend(Ext.Panel, {
    title: 'My Panel',
    width: 482,
    height: 366,
    initComponent: function() {
        this.items = [
            {
                xtype: 'form',
                title: 'My Form',
                labelWidth: 100,
                labelAlign: 'left',
                layout: 'form',
                items: [
                    {
                        xtype: 'textfield',
                        fieldLabel: 'Trail Name',
                        anchor: '100%'
                    },
                    {
                        xtype: 'datefield',
                        fieldLabel: 'From',
                        anchor: '100%'
                    },
                    {
                        xtype: 'datefield',
                        fieldLabel: 'To',
                        anchor: '100%'
                    }
                ]
            },
            {
                xtype: 'tabpanel',
                activeTab: 4,
                items: [
                    {
                        xtype: 'panel',
                        title: 'Gardens',
                        items: [
                            {
                                xtype: 'editorgrid',
                                title: 'Contacts',
                                width: 481,
                                height: 170,
                                columns: [
                                    {
                                        xtype: 'gridcolumn',
                                        header: 'Column',
                                        sortable: true,
                                        resizable: true,
                                        width: 100,
                                        dataIndex: 'string',
                                        editor: {
                                            xtype: 'textfield',
                                            fieldLabel: 'Label'
                                        }
                                    },
                                    {
                                        xtype: 'gridcolumn',
                                        header: 'Column',
                                        sortable: true,
                                        resizable: true,
                                        width: 100,
                                        dataIndex: 'string',
                                        editor: {
                                            xtype: 'textfield',
                                            fieldLabel: 'Label'
                                        }
                                    },
                                    {
                                        xtype: 'gridcolumn',
                                        header: 'Column',
                                        sortable: true,
                                        resizable: true,
                                        width: 100,
                                        dataIndex: 'string',
                                        editor: {
                                            xtype: 'textfield',
                                            fieldLabel: 'Label'
                                        }
                                    }
                                ]
                            }
                        ]
                    },
                    {
                        xtype: 'panel',
                        title: 'Artists'
                    },
                    {
                        xtype: 'panel',
                        title: 'Exhibits'
                    },
                    {
                        xtype: 'panel',
                        title: 'Projects'
                    },
                    {
                        xtype: 'panel',
                        title: 'Organiser Contacts'
                    }
                ]
            }
        ];
        MyPanelUi.superclass.initComponent.call(this);
        }
        })
   // Ext.util.Observable.capture(elCenter, function(e) {console.info(e);});
// render the panel here...
      var MyPanel = new MyPanelUi({title:'my new panel'});
      elCenter.add(MyPanel);
        MyPanel = Ext.extend(Ext.Panel, {
//  constructor function
    constructor: function(config) {
        Ext.apply(this, { 
            // Put your pre-configured config options here
            width: 300,
            height: 300
        });
        MyPanel.superclass.constructor.apply(this, arguments);
    }
});
 
var myfirstpanel = new MyPanel({
    title: 'My First Panel'
});
 
var mysecondpanel = new MyPanel({
    title: 'My Second Panel'
});
    
    elCenter.doLayout();



        }); //end onReady
        </script>

    </head>
    <body>
      
    </body>
</html>
