package com.mycompany.client;

import com.google.gwt.core.client.EntryPoint;
import com.google.gwt.event.dom.client.ClickEvent;
import com.google.gwt.event.dom.client.ClickHandler;
import com.google.gwt.user.client.Window;
import com.google.gwt.user.client.ui.Button;
import com.google.gwt.user.client.ui.RootPanel;
import com.google.gwt.user.client.ui.Frame;
import com.google.gwt.user.client.ui.TabPanel;
import com.google.gwt.user.client.ui.DecoratedTabPanel;
import com.google.gwt.user.client.ui.HTML;
import com.google.gwt.user.client.ui.ListBox;
import com.google.gwt.user.client.ui.SimplePanel;
import com.google.gwt.user.client.ui.FlowPanel;
import com.google.gwt.user.client.ui.TextBox;
import com.google.gwt.user.client.ui.Label;
import com.google.gwt.user.client.ui.FocusPanel;
import com.google.gwt.user.client.ui.FormPanel;
import com.google.gwt.user.client.ui.DisclosurePanel;
import com.google.gwt.user.client.ui.AbsolutePanel;
import com.google.gwt.user.client.ui.NamedFrame;
import com.google.gwt.user.client.ui.FileUpload;
import com.google.gwt.event.dom.client.ChangeHandler;
import com.google.gwt.event.dom.client.ChangeEvent;
import com.google.gwt.user.client.ui.DialogBox;
import com.google.gwt.user.client.ui.VerticalPanel;
import com.google.gwt.user.client.ui.HorizontalPanel;

/**
 * Entry point classes define <code>onModuleLoad()</code>.
 */
public class ProgShortcut implements EntryPoint {
 DecoratedTabPanel decoratedTabPanel = new DecoratedTabPanel();
 ListBox listBox = new ListBox();
 TextBox textBox = new TextBox();
 ListBox listBox_1 = new ListBox();
    FileUpload upload = new FileUpload();
    String path;
    String fileex;
    
    public static native void openprog(String plocation) /*-{
     w = new ActiveXObject("WScript.Shell");
     try {
         w.run(plocation);
        } catch (err){
         alert("error! File path contains spaces, unable to open!");
        }
  }-*/;
    
    public String get_fname (String fpath){
      String[] parts = fpath.split("/");
         if (parts.length < 2) {
             parts = fpath.split("\\\\");
         }
         return parts[parts.length-1];
    }
    
 public void onModuleLoad() {
  final Button sendButton = new Button("Program Shortcut");
  HorizontalPanel buttonPanel = new HorizontalPanel();
  VerticalPanel totalPanel = new VerticalPanel();
  sendButton.addStyleName("sendButton");
  RootPanel.get("sendButtonContainer").add(sendButton);
  final DialogBox dialogBox = new DialogBox();
  dialogBox.setText("Program Shortcut");
  dialogBox.setAnimationEnabled(true);
  //RootPanel rootPanel = RootPanel.get();
  
  //rootPanel.add(decoratedTabPanel, 6, 41);
  dialogBox.setWidget(totalPanel);
  totalPanel.add(decoratedTabPanel);
  totalPanel.add(buttonPanel);
  decoratedTabPanel.setSize("324px", "336px");
  
  FlowPanel flowPanel = new FlowPanel();
  decoratedTabPanel.add(flowPanel, "Shortcuts", false);
  flowPanel.setSize("298px", "294px");
  listBox.addChangeHandler(new ChangeHandler() {
   public void onChange(ChangeEvent event) {
   }
  });
  
  
  
  
  listBox.addClickHandler(new ClickHandler() {
   public void onClick(ClickEvent event) {
    // Open Program when link selected
    //Window.open( path, "MyWindow", "menubar=yes,location=yes,resizable=yes,scrollbars=yes,status=yes" );
    openprog(fileex);
   }
  });
  flowPanel.add(listBox);
  listBox.setSize("308px", "310px");
  listBox.setVisibleItemCount(5);
  
  AbsolutePanel absolutePanel = new AbsolutePanel();
  absolutePanel.setStyleName("body");
  decoratedTabPanel.add(absolutePanel, "Create New", false);
  absolutePanel.setSize("309px", "309px");
  
  // Create a FileUpload widget.
     upload.setName("uploadFormElement");
     absolutePanel.add(upload, 30, 144);
     upload.setSize("248px", "29px");
  
  
  absolutePanel.add(textBox, 30, 60);
  textBox.setSize("248px", "29px");
  
  Label label = new Label("Shortcut Name:");
  absolutePanel.add(label, 30, 26);
  
  Label label_1 = new Label("Program Location:");
  absolutePanel.add(label_1, 30, 105);
  
  Button button_4 = new Button("Create Shortcut");
  button_4.addClickHandler(new ClickHandler() {
   public void onClick(ClickEvent event) {
    // Add new program shortcut
    String new_shortcut = textBox.getText();
    path = upload.getFilename();
    fileex = get_fname(path);
    textBox.setText("");
    upload.setName("");
    listBox.addItem(new_shortcut);
    listBox_1.addItem(new_shortcut);
    decoratedTabPanel.selectTab(0);
   }
  });
  absolutePanel.add(button_4, 64, 222);
  
  AbsolutePanel absolutePanel_1 = new AbsolutePanel();
  decoratedTabPanel.add(absolutePanel_1, "Edit List", false);
  absolutePanel_1.setSize("310px", "310px");
  
  absolutePanel_1.add(listBox_1, 0, 0);
  listBox_1.setSize("304px", "254px");
  listBox_1.setVisibleItemCount(5);
  
  Button button_5 = new Button("Delete Selected Shortcut");
  button_5.addClickHandler(new ClickHandler() {
   public void onClick(ClickEvent event) {
    // Delete Selected Link From List
    int to_remove = listBox_1.getSelectedIndex();
    listBox_1.removeItem(to_remove);
    listBox.removeItem(to_remove);
    decoratedTabPanel.selectTab(0);
   }
  });
  absolutePanel_1.add(button_5, 53, 260);
  button_5.setSize("199px", "34px");
  
  Button button = new Button("New");
  button.addClickHandler(new ClickHandler() {
   public void onClick(ClickEvent event) {
    decoratedTabPanel.selectTab(1);
   }
  });
  buttonPanel.add(button);
  button.setSize("102px", "34px");
  
  Button button_1 = new Button("Edit List");
  button_1.addClickHandler(new ClickHandler() {
   public void onClick(ClickEvent event) {
    decoratedTabPanel.selectTab(2);
   }
  });
  buttonPanel.add(button_1);
  button_1.setSize("88px", "34px");
  
  Button button_2 = new Button("Close");
  button_2.addClickHandler(new ClickHandler() {
   public void onClick(ClickEvent event) {
    dialogBox.hide();
        sendButton.setEnabled(true);
        sendButton.setFocus(true);
   }
  });
  buttonPanel.add(button_2);
  button_2.setSize("100px", "34px");
  
  /*Label label_2 = new Label("Program Shortcuts");
  label_2.setStyleName("body");
  totalPanel.add(label_2);*/
  
  // Set initial Tab
  decoratedTabPanel.selectTab(0);
  
  class MyHandler implements ClickHandler {
      /**
       * Fired when the user clicks on the sendButton.
       */
      public void onClick(ClickEvent event) {
        startTool();
      }
      
      /**
       * Send the name from the nameField to the server and wait for a response.
       */
      private void startTool() {
        sendButton.setEnabled(false);
        dialogBox.center();
      }
    }

    // Add a handler to send the name to the server
    MyHandler handler = new MyHandler();
    sendButton.addClickHandler(handler);

 }
}
