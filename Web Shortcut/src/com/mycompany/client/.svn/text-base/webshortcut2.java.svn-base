package com.mycompany.client;

import com.google.gwt.core.client.EntryPoint;
import com.google.gwt.event.dom.client.ClickEvent;
import com.google.gwt.event.dom.client.ClickHandler;
import com.google.gwt.user.client.Window;
import com.google.gwt.user.client.ui.Button;
import com.google.gwt.user.client.ui.RootPanel;
import com.google.gwt.user.client.ui.DecoratedTabPanel;
import com.google.gwt.user.client.ui.Label;
import com.google.gwt.user.client.ui.AbsolutePanel;
import com.google.gwt.user.client.ui.ListBox;
import com.google.gwt.user.client.ui.TextBox;

/**
 * Entry point classes define <code>onModuleLoad()</code>.
 */
public class webshortcut2 implements EntryPoint {
  DecoratedTabPanel decoratedTabPanel = new DecoratedTabPanel();
	TextBox textBox = new TextBox();
	TextBox textBox_1 = new TextBox();
	ListBox listBox_1 = new ListBox();
	ListBox listBox = new ListBox();
	
	
	String new_shortcut;
	String link;
	
    public static native void openweb(String weburl) /*-{
	try {
    	window.open(weburl,'myWindow','top:40,left:100,menubar=no,toolbar=yes');
    } catch (err){
    	alert("error! could not open link!");
    }
}-*/;
	
	public void onModuleLoad() {
		RootPanel rootPanel = RootPanel.get();
		
		rootPanel.add(decoratedTabPanel, 0, 40);
		decoratedTabPanel.setSize("324px", "353px");
		
		AbsolutePanel absolutePanel = new AbsolutePanel();
		decoratedTabPanel.add(absolutePanel, "Shortcuts", false);
		absolutePanel.setSize("310px", "293px");
		
		listBox.addClickHandler(new ClickHandler() {
			public void onClick(ClickEvent event) {
				// Open Website Link Shortcut
				openweb(link);
			}
		});
		absolutePanel.add(listBox, 0, 0);
		listBox.setSize("310px", "311px");
		listBox.setVisibleItemCount(5);
		
		AbsolutePanel absolutePanel_1 = new AbsolutePanel();
		decoratedTabPanel.add(absolutePanel_1, "Create New", false);
		absolutePanel_1.setSize("311px", "291px");
		
		absolutePanel_1.add(textBox, 33, 55);
		textBox.setSize("246px", "28px");
		
		absolutePanel_1.add(textBox_1, 33, 138);
		textBox_1.setSize("246px", "28px");
		
		Button button_3 = new Button("Create Shortcut");
		button_3.addClickHandler(new ClickHandler() {
			public void onClick(ClickEvent event) {
				// Add new program shortcut
				new_shortcut = textBox.getText();
				link = textBox_1.getText();
				textBox.setText("");
				textBox_1.setText("");
				listBox.addItem(new_shortcut);
				listBox_1.addItem(new_shortcut);
				decoratedTabPanel.selectTab(0);
			}
		});
		absolutePanel_1.add(button_3, 66, 207);
		
		Label label_1 = new Label("Shortcut Name:");
		absolutePanel_1.add(label_1, 33, 19);
		
		Label label_2 = new Label("Website Link");
		absolutePanel_1.add(label_2, 33, 103);
		
		AbsolutePanel absolutePanel_2 = new AbsolutePanel();
		decoratedTabPanel.add(absolutePanel_2, "Edit List", false);
		absolutePanel_2.setSize("311px", "292px");
		
		absolutePanel_2.add(listBox_1, 0, 0);
		listBox_1.setSize("311px", "247px");
		listBox_1.setVisibleItemCount(5);
		
		Button button_4 = new Button("Delete Selected Shortcut");
		button_4.addClickHandler(new ClickHandler() {
			public void onClick(ClickEvent event) {
				int to_remove = listBox_1.getSelectedIndex();
				listBox_1.removeItem(to_remove);
				listBox.removeItem(to_remove);
				decoratedTabPanel.selectTab(0);
			}
		});
		absolutePanel_2.add(button_4, 57, 252);
		button_4.setSize("203px", "34px");
		
		Label label = new Label("Website Links");
		label.setStyleName("body");
		rootPanel.add(label, 105, 6);
		
		Button button = new Button("New");
		button.addClickHandler(new ClickHandler() {
			public void onClick(ClickEvent event) {
				decoratedTabPanel.selectTab(1);
			}
		});
		rootPanel.add(button, 6, 399);
		button.setSize("97px", "34px");
		
		Button button_1 = new Button("Edit List");
		button_1.addClickHandler(new ClickHandler() {
			public void onClick(ClickEvent event) {
				decoratedTabPanel.selectTab(2);
			}
		});
		rootPanel.add(button_1, 111, 399);
		button_1.setSize("97px", "34px");
		
		Button button_2 = new Button("Close");
		button_2.addClickHandler(new ClickHandler() {
			public void onClick(ClickEvent event) {
				// Exit Program
			}
		});
		rootPanel.add(button_2, 218, 399);
		button_2.setSize("97px", "34px");
		
		// Open default Panel
		decoratedTabPanel.selectTab(0);
	}
}
